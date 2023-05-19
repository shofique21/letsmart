<?php 
namespace App\Repositories\Interfaces;


Interface FrontentdProductRepositoryInterface{
    public function allCategories();
    public function allSubcategories();
    public function singleCategoryProducts($id);
    public function subcategoryList($id);
    public function allproducts();
    public function singleSubcategoryProducts($id);
    public function getProductDetails($id);
}