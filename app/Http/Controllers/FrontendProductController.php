<?php

namespace App\Http\Controllers;

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
            $categoryProducts = $this->frontendProduct->singleCategoryProducts($id);
            $subcategoryList = $this->frontendProduct->subcategoryList($id);
            return view('frontend.categoryProduct', compact('subcategoryList','categoryProducts'));
    }

    public function subcategoryProducts($id)
    {
        $subcategoryProducts = $this->frontendProduct->singleSubcategoryProducts($id);
        return view('frontend.subcategoryProducts', compact('subcategoryProducts'));
    }

    public function productDetails($id)
    {
        $product_details = $this->frontendProduct->getProductDetails($id);
        return view('frontend.productDetails', compact('product_details'));
    }
}
