<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\FrontentdProductRepositoryInterface;

class FrontendProductController extends Controller
{
    private $frontendProduct;
    public function __construct(FrontentdProductRepositoryInterface $frontendProduct)
    {
       $this->frontendProduct = $frontendProduct;
    }

    public function categoryProducts($id){
            $categories = $this->frontendProduct->allCategories();
            $categoryProducts = $this->frontendProduct->singleCategory($id);
            $subcategoryList = $this->frontendProduct->subcategoryList($id);
            return view('frontend.categoryProduct', compact('categories','subcategoryList'));
    }

    public function subcategoryProducts()
    {
        $categories = $this->frontendProduct->allCategories();
        return view('frontend.subcategoryProducts', compact('categories'));
    }

    public function productDetails()
    {
        $categories = $this->frontendProduct->allCategories();
        return view('frontend.productDetails', compact('categories'));
    }
}
