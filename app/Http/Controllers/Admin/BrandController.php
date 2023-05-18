<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('admin.brandList',compact('brands'));
    }
    public function create(){
        return view('admin.brandCreate');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data['description'] = $request->description;

       Brand::query()->create($data);
        return redirect()->route('brands.index')->with('message', 'Brand Created Successfully');
    }
}
