<?php
namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\ShippingAddress;
use App\Providers\RouteServiceProvider;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface{
    public function createOrder($order)
    {
        return Order::create($order)->id;
    }

    public function saveItem($itemData)
    {
        return OrderItem::create($itemData);
    }
    public function shippingAddress($address)
    {
        return ShippingAddress::create($address);
    }

    public function createPayment($paymentData)
    {
        return Payment::create($paymentData);
    }

    public function orderInfo($id){
        return Order::find($id);
    }

    public function invoice($orderId)
    {
        return   Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->join('products', 'products.id', '=', 'order_items.product_id')->get([
            'order_items.quantity', 'order_items.product_price','order_items.tax',
            'order_items.discount','products.name','products.SKU'
        ]);
        
    }

    public function deliveryAddress($id)
    {
        return ShippingAddress::where('order_id',$id)->first();
    }
    public function backToHomePage()
    {
       return route('home');
    }
}