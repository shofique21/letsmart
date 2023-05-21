<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $address = $request->validate([
            'street_name' => 'required|string',
            'postCode' => 'required|string|max:10',
            'state' => 'required|string|max:100',
            'phone' => 'required|string|max:15',
        ]);
        $items = \Cart::getContent();
        $order = [
            'user_id' => Auth::user()->id,
            'total' => \Cart::getTotal(),
        ];
        $orderId = $this->orderRepository->createOrder($order);
        foreach ($items as $item) {
            $itemData = [
                'order_id' => $orderId,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'item_total_price' => $item->quantity * $item->price
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
            return "Create your payment";
        } else {
            return redirect()->route('cart.list');
        }
    }
}
