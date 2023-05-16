<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\FrontentdProductRepositoryInterface;

class FrontendProductController extends Controller
{
    private $categoryProduct;
    public function __construct(FrontentdProductRepositoryInterface $frontendProduct)
    {
       $this->categoryProduct = $frontendProduct;
    }

    public function categoryProducts($id){
            $categories = $this->categoryProduct->allCategories();
            $categoryProducts = $this->categoryProduct->singleCategory($id);
            $subcategoryList = $this->categoryProduct->subcategoryList($id);
            return view('frontend.categoryProduct', compact('categories','subcategoryList'));
    }
}
