<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Inventory;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    
    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->middleware('isAdmin');
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $products = $this->productRepository->allproducts();
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        $discounts = Discount::all();
        $categories = $this->categoryRepository->allcategories();
        return view('admin.productCreate', compact('categories','discounts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'SKU' => 'required|string',
            'price' => 'required|string',
        ]);

        $inventoryData = $request->validate([
            'quantity' => 'required|integer',
        ]);
        
        $data['inventory_id'] = Inventory::create($inventoryData)->id;
        $this->productRepository->storeProduct($data);
        return redirect()->route('products.index')->with('message', 'Product Created Successfully');

    }
}
