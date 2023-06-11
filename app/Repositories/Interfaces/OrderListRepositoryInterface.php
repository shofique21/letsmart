<?php
namespace App\Repositories\Interfaces;

Interface OrderListRepositoryInterface {
    public function allOrder();
    public function orderDetails($id);
    public function shippingAddress($id);
}