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
            $categoryProducts = $this->frontendProduct->singleCategoryProducts($id);
            $subcategoryList = $this->frontendProduct->subcategoryList($id);
            return view('frontend.categoryProduct', compact('categories','subcategoryList','categoryProducts'));
    }

    public function subcategoryProducts($id)
    {
        $categories = $this->frontendProduct->allCategories();
        $subcategoryProducts = $this->frontendProduct->singleSubcategoryProducts($id);
        return view('frontend.subcategoryProducts', compact('categories','subcategoryProducts'));
    }

    public function productDetails($id)
    {
        $categories = $this->frontendProduct->allCategories();
        $product_details = $this->frontendProduct->getProductDetails($id);
        return view('frontend.productDetails', compact('categories','product_details'));
    }
}
