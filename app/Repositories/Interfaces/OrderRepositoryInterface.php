<?php
namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface {
    public function createOrder($order);
    public function saveItem($itemData);
    public function shippingAddress($address);
    public function createPayment($paymentData);
    public function invoice($orderId);
    public function deliveryAddress($orderId);
    public function orderInfo($id);
    public function backToHomePage();
}