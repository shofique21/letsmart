<?php
namespace App\Repositories;

use App\Models\Inventory;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface{

    public function allproducts()
    {
        return Product::latest()->paginate(10);
    }

    public function storeProduct($data)
    {
        return Product::create($data)->id;
    }

    public function findProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($data, $id)
    {
        $product = Product::where('id', $id)->first();
        $product->name = $data['name'];
        $product->category_id = $data['category_id'];
        $product->short_description = $data['short_description'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->SKU = $data['SKU'];
        $product->discount_id = $data['discount_id'];
        $product->save();
        $inventory =  Inventory::where('id', $product->inventory_id)->first();
        $inventory->quantity = $data['quantity'];
        $inventory->save();
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}