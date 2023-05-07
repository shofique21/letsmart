<?php
namespace App\Repositories\Interfaces;

Interface ProductRepositoryInterface{
    public function allproducts();
    public function storeProduct($data);
}