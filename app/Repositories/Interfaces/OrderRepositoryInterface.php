<?php
namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface {
    public function createOrder($order);
    public function saveItem($itemData);
    public function shippingAddress($address);
}