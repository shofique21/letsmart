<?php
namespace App\Repositories;

use App\Models\Order;
use App\Models\ShippingAddress;
use App\Repositories\Interfaces\OrderListRepositoryInterface;

class OrderListRepository implements OrderListRepositoryInterface
{
  public function allOrder()
  {
    return Order::latest()->paginate(20);
  }

  public function orderDetails($id)
  {
    return   Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
    ->join('products', 'products.id', '=', 'order_items.product_id')->join('product_media','product_media.product_id', '=','products.id')->where('orders.id',$id)->get([
        'order_items.quantity', 'order_items.product_price','order_items.tax',
        'order_items.discount','products.name','products.SKU','product_media.product_images'
    ]);
  }

  public function shippingAddress($id) 
  {
    return ShippingAddress::where('order_id',$id)->first();
  }
}