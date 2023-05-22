<?php
namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\ShippingAddress;
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

    public function invoice($orderId)
    {
        return   Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->where('orders.id',$orderId)->get();
        
    }

    public function deliveryAddress($orderId)
    {
        return ShippingAddress::find($orderId);
    }
}