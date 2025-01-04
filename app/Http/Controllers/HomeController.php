<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\FrontentdProductRepositoryInterface;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $categoryRepository;
    private $productRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, FrontentdProductRepositoryInterface $productRepository)
    {
       $this->categoryRepository = $categoryRepository;
       $this->productRepository = $productRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = $this->categoryRepository->totalCategories();
        $products = $this->productRepository->allproducts() ?? null;
        // foreach($products as $product){
        //     if($product->is_feature == 1){
        //         $product = (array)$product;
        //         $featureProducts = array_merge($featureProducts,$product);
        //     }
        // }
        if($products->count() > 0) {
        return view('home', compact('categories','products'));
        }
        else {
            return view('home2', compact('categories'));
        }
    }
}
