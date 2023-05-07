<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->middleware('isAdmin');
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        $categories = $this->categoryRepository->allCategories();
        return view('admin.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.categoryCreate');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data['description'] = $request->description;

        $this->categoryRepository->storeCategory($data);
        return redirect()->route('categories.index')->with('message', 'Category Created Successfully');
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->findCategory($id);
        return view('admin.categoryEdit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $this->categoryRepository->updateCategory($request->all(), $id);
        return redirect()->route('categories.index')->with('message', 'Category Updated Successfully');
    }
    
    public function destroy($id)
    {
        $this->categoryRepository->destroyCategory($id);
        return redirect()->route('categories.index')->with('message', 'Category Deleted Successfully');
    }
}
