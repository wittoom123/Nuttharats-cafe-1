<?php

namespace App\Http\Controllers;

use App\product_introduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use Facade\FlareClient\Stacktrace\Flie;
use File;


class Product_introductionController extends Controller
{
    public function index(){
        $product_introduction = product_introduction::all();
        return view('admin.product_introduction.index',compact('product_introduction'));
    }
    public function create(Request $request)
    {
        $ValidateData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'detail' => 'required',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        "name.unique"=>"มีชื่อประเภทสินค้านี้อยู่แล้ว",
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        "price.required"=>"กรอกข้อมูลตัวอย่าง",
        ]);
        $product_introduction = new Product_introduction;
        $product_introduction->name = $request->name;
        $product_introduction->detail = $request->detail;
        if($request->hasFile('image')){
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $product_introduction->image = $filename;
            
        }else{
            $product_introduction->image= 'NOPIC.png';
        }
        $product_introduction->save();
        return redirect('/admin/product_introduction');
    }

    
}