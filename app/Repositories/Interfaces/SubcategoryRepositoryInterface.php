<?php
namespace App\Repositories\Interfaces;

Interface SubcategoryRepositoryInterface{
    public function allsubcategories();
    public function storeSubcategory($data);
    public function findSubcategory($id);
    public function updateSubcategory($data, $id);
    public function deleteSubcategory($id);
    public function subcategoryList();
}