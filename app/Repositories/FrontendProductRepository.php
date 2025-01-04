<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Repositories\Interfaces\FrontentdProductRepositoryInterface;

class FrontendProductRepository implements FrontentdProductRepositoryInterface
{
    public function allCategories()
    {
        return Category::all();
    }

    public function allSubcategories()
    {
        return Subcategory::all();
    }

    public function singleCategoryProducts($id)
    {
        return Product::where('category_id', $id)->get();
    }
    public function subcategoryList($id)
    {
        return Subcategory::where('category_id', $id)->get();
    }
    public function allproducts()
    {
        return Product::where('status', 1)->get();
    }

    public function singleSubcategoryProducts($id)
    {
        return Product::where('subcategory_id', $id)->get();
    }
    public function getProductDetails($id)
    {
        return Product::where('id', $id)->first();
    }
}
