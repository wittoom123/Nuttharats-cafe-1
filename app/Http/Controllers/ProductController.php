<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
//use Facade\FlareClient\Stacktrace\Flie;
use File;


class ProductController extends Controller
{
    public function index(){
        $product = product::all();
        return view('admin.product.index',compact('product'));
    }
    public function front(){
        $product = product::all();
        return view('product',compact('product'));
    }
    public function create(Request $request)
    {
        $ValidateData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        "name.unique"=>"มีชื่อประเภทสินค้านี้อยู่แล้ว",
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        "price.required"=>"กรอกข้อมูลราคาสินค้า",
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category;
        if($request->hasFile('image')){
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $product->image = $filename;
            
        }else{
            $product->image= 'NOPIC.png';
        }
        $product->save();
        return redirect('/admin/product');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $ValidateData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        "price.required"=>"กรอกข้อมูลราคาสินค้า",
        ]);

       $product = new Product;
        if($request->hasFile('image')){
            $product = Product::find($id);
            if($product->imgs !='NOPIC.png '){
                File::delete(public_path().'/admin/imgs/'.$product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $product->image = $filename;
            $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category;
        }else{
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->category_id = $request->category;
        }
        $product->save();
        return redirect('/admin/product');
    }
    public function delete($id){
        $delete =Product::find($id);
        if ($delete->imgs !='NOPIC.png ') {
            File::delete(public_path().'/admin/imgs/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('product');
    }
    }
    
