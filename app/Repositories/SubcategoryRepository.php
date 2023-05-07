<?php
namespace App\Repositories;

use App\Models\Subcategory;
use App\Repositories\Interfaces\SubcategoryRepositoryInterface;

class SubcategoryRepository implements SubcategoryRepositoryInterface{
    public function allsubcategories()
    {
        return Subcategory::latest()->paginate(10);
    }

    public function storeSubcategory($data)
    {
        return Subcategory::create($data);
    }

    public function findSubcategory($id)
    {
        return Subcategory::find($id);
    }

    public function updateSubcategory($data, $id)
    {
        $subcategory = Subcategory::where('id', $id)->first();
        $subcategory->name = $data['name'];
        $subcategory->description = $data['description'];
        $subcategory->category_id = $data['category_id'];
        $subcategory->save();
    }

    public function deleteSubcategory($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
    }
}