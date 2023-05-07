<?php
namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface{

    public function allproducts()
    {
        return Product::latest()->paginate(10);
    }

    public function storeProduct($data)
    {
        return Product::create($data);
    }
}