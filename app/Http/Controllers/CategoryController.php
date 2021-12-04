<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

   
   public function edit($category_id){
       $category = Category::find($category_id);
        return view('admin.category.edit',compact('category'));
   }
}
