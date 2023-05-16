<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Subcategory;
use App\Repositories\Interfaces\FrontentdProductRepositoryInterface;

class FrontendProductRepository implements FrontentdProductRepositoryInterface{
    public function allCategories()
    {
        return Category::all();
    }

    public function allSubcategories()
    {
        return Subcategory::all();
    }

    public function singleCategory($id)
    {
        return Category::where('id', $id)->get();
    }
    public function subcategoryList($id)
    {
        return Subcategory::where('category_id', $id)->get();
    }
}