<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Discount;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductMedia;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\Interfaces\SubcategoryRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $subcategoryRepository;

    public function __construct(ProductRepositoryInterface $productRepository, CategoryRepositoryInterface $categoryRepository, SubcategoryRepositoryInterface $subcategoryRepository)
    {
        $this->middleware('isAdmin');
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->subcategoryRepository = $subcategoryRepository;
    }

    public function index()
    {
        $products = $this->productRepository->allproducts();
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        $discounts = Discount::all();
        $categories = $this->categoryRepository->allCategoriesName();
        $subcategories = $this->subcategoryRepository->subcategoryList();
        $brands = Brand::all();
        return view('admin.productCreate', compact('categories', 'subcategories', 'brands', 'discounts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'SKU' => 'required|string',
            'sale_price' => 'required|string',
            'product_images' => 'required',
            'product_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,web|max:2048'
        ]);

        $inventoryData = $request->validate([
            'quantity' => 'required|integer',
        ]);
        $inventoryData['buy_price'] = $request->get('buy_price');
        $inventoryData['total_stock'] = $request->get('quantity');
        $inventoryData['buy_accounts'] = $request->get('quantity') * $inventoryData['buy_price'];

        $data['inventory_id'] = Inventory::create($inventoryData)->id;
        $data['short_description'] = $request->get('short_description');
        $data['description'] = $request->get('description');
        $data['subcategory_id'] = $request->get('subcategory_id');



        // $image_path = $request->file('single_image')->store('images', 'public');
        // $request->single_image->move(public_path() . '/images/', $imageName);

        $productImages = [];
        if ($mediaInfo['product_id'] = $this->productRepository->storeProduct($data)) {
            if ($request->hasfile('product_images')) {
                $productImages = $request->file('product_images');
                $imagePath = [];
                foreach ($productImages as $image) {
                    $fileName = uniqid() . '.' . $image->getClientOriginalName();
                    $image_path =  $image->storeAs('images', $fileName, 'public');
                    array_push($imagePath, $image_path);
                }
            }
            $mediaInfo['product_images'] =  $imagePath;
            $mediaInfo['video_url'] = $request->get('video_url');
        }

        ProductMedia::create($mediaInfo);

        return redirect()->route('products.index')->with('message', 'Product Created Successfully');
    }

    public function edit($id)
    {
        $discounts = Discount::all();
        $categories = $this->categoryRepository->allcategories();
        $product = $this->productRepository->findProduct($id);
        return view('admin.productEdit', compact('discounts', 'categories', 'product'));
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'SKU' => 'required|string',
            'price' => 'required|string',
        ]);
        $data = $request->all();
        $this->productRepository->updateProduct($data, $id);
        return redirect()->route('products.index')->with('message', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $this->productRepository->deleteProduct($id);
        return redirect()->route('products.index')->with('message', 'Product Deleted Successfully');
    }
}
