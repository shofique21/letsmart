<?php
namespace App\Repositories\Interfaces;

Interface ProductRepositoryInterface{
    public function allproducts();
    public function storeProduct($data);
    public function findProduct($id);
    public function updateProduct($data,$id);
    public function deleteProduct($id);
}