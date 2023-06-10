<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('frontend.cartView', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {

        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function confirmAllCart(Request $request)
    {
        $items = \Cart::getContent();
        if (!is_array($items)) {
            return redirect()->to('/');
        }
        $address = $request->validate([
            'street_name' => 'required|string',
            'postCode' => 'required|string|max:10',
            'state' => 'required|string|max:100',
            'phone' => 'required|string|max:15',
        ]);
        $number = Order::latest()->first() ?? 1;
        $invoiceId ="LTSM". 1000 + (int)$number->id; 
        $order = [
            'user_id' => Auth::user()->id,
            'total' => \Cart::getTotal(),
            'invoice_id' => $invoiceId,
        ];
        $orderId = $this->orderRepository->createOrder($order);
        Session::put('order_id', $orderId);

        foreach ($items as $item) {
            $itemData = [
                'order_id' => $orderId,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'product_price' => $item->price,
                'tax' => 0,
                'discount' => 0,
            ];
            $response  = $this->orderRepository->saveItem($itemData);
        }

        $address  = [
            'street_name' => $request->get('street_name'),
            'postCode' => $request->get('postCode'),
            'state' => $request->get('state'),
            'phone' => $request->get('phone'),
            'user_id' => Auth::user()->id,
            'order_id' =>  $orderId,
        ];
        $this->orderRepository->shippingAddress($address);
        if ($response) {
            \Cart::clear();
            return view('frontend.payment');
        } else {
            return redirect()->route('cart.list');
        }
    }

    public function paymentConfirm(Request $request)
    {
        $orderId =  Session::get('order_id');
        $paymentStatus = Payment::where('order_id', $orderId)->first();
        if (!is_null($paymentStatus)) {
            return redirect()->to('/');
        }
        $paymentData = $request->validate([
            'payment_type' => 'required|string'
        ]);
        $paymentData = [
            'user_id' => Auth::user()->id,
            'order_id' => $orderId,
            'payment_type' => $request->get('payment_type'),
            'amount' => $request->get('amount'),
        ];
        if ($this->orderRepository->createPayment($paymentData)) {
            $order = $this->orderRepository->orderInfo($orderId);
            $orderItems = $this->orderRepository->invoice($orderId);
            $shippingAddress = $this->orderRepository->deliveryAddress($orderId);
            return view('frontend.invoice', compact('order', 'orderItems', 'shippingAddress'));
        }
    }
}
