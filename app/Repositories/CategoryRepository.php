<?php
namespace App\Repositories;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository  implements CategoryRepositoryInterface{
    public function allCategories()
    {
        return Category::latest()->paginate(10);
    }  
    public function allCategoriesName()
    {
        return Category::all();
    }
    public function storeCategory($data)
    {
        return Category::create($data);
    }

    public function findCategory($id)
    {
        return Category::find($id);
    }

    public function updateCategory($data,$id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->save();
    }
    
    public function destroyCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
    public function totalCategories(){
        return Category::all();
    }
}