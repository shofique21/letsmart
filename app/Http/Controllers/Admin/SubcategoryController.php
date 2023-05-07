<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SubcategoryRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class SubcategoryController extends Controller
{
    private $subcategoryRepository;
    private $categoryRepository;

    public function __construct(SubcategoryRepositoryInterface $subcategoryRepository, CategoryRepositoryInterface $categoryRepository){
        $this->middleware('isAdmin');
        $this->subcategoryRepository = $subcategoryRepository;
        $this->categoryRepository = $categoryRepository;
    }
    
    public function index()
    {
        $subcategories = $this->subcategoryRepository->allsubcategories();
        return view('admin.subcategory', compact('subcategories'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->allCategoriesName();
        return view('admin.subcategoryCreate',compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
        ]);

        $data['description'] = $request->description;
        $this->subcategoryRepository->storeSubcategory($data);
        return redirect()->route('subcategories.index')->with('message', 'Subcategory Created Successfully');
    }

    public function edit($id)
    {
        $subcategory = $this->subcategoryRepository->findSubcategory($id);
        $categories = $this->categoryRepository->allCategoriesName();
        return view('admin.subcategoryEdit', compact('subcategory','categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|integer',
        ]);
        $this->subcategoryRepository->updateSubcategory($request->all(), $id);
        return redirect()->route('subcategories.index')->with('message', 'Subcategory Updated Successfully');
    }

    public function destroy($id){
        $this->subcategoryRepository->deleteSubcategory($id);
        return redirect()->route('subcategories.index')->with('message', 'Category Deleted Successfully');
    }
}
