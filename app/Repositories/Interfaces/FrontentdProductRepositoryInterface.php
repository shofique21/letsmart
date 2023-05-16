<?php 
namespace App\Repositories\Interfaces;


Interface FrontentdProductRepositoryInterface{
    public function allCategories();
    public function allSubcategories();
    public function singleCategory($id);
    public function subcategoryList($id);
}