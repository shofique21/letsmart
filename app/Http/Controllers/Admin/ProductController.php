<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductMedia;
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
            'single_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_images' => 'required',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           // 'gallery_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $inventoryData = $request->validate([
            'quantity' => 'required|integer',
        ]);
        
        $data['inventory_id'] = Inventory::create($inventoryData)->id;
        $data['short_description'] = $request->get('short_description');
        $data['description'] = $request->get('description');
       if($mediaInfo['product_id'] = $this->productRepository->storeProduct($data)){
        if ($request->hasFile('single_image')) {
            $imageName = time().'.'.$request->single_image->extension();  
            $request->single_image->storeAs('images', $imageName);
            $mediaInfo['single_image'] = $imageName;
            $mediaInfo['video_url'] = $request->get('video_url');
             ProductMedia::create($mediaInfo);
            }
        }
        // if($request->hasfile('gallery_images'))
        //  {

        //     foreach($request->file('gallery_images') as $image)
        //     {
        //         $name=$image->getClientOriginalName();
        //         $image->move(public_path().'/images/', $name);  
        //         $imageData[] = $name;  
        //     }
        //  }

        //  $gellery = new ProductMedia();
        //  $gellery->gallery_images=json_encode($imageData);
        //  $gellery->save();

        return redirect()->route('products.index')->with('message', 'Product Created Successfully');

    }

    public function edit($id){
        $discounts = Discount::all();
        $categories = $this->categoryRepository->allcategories();
        $product = $this->productRepository->findProduct($id);
        return view('admin.productEdit', compact('discounts', 'categories','product'));
    }

    public function update(Request $request, $id)
    {
       
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'SKU' => 'required|string',
            'price' => 'required|string',
        ]);
        $data =$request->all();
        $this->productRepository->updateProduct($data, $id);
        return redirect()->route('products.index')->with('message', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $this->productRepository->deleteProduct($id);
        return redirect()->route('products.index')->with('message', 'Product Deleted Successfully');
    }
}
