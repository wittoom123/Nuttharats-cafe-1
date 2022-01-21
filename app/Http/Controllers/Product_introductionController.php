<?php

namespace App\Http\Controllers;

use App\product_introduction;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
//use Facade\FlareClient\Stacktrace\Flie;
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

        if($request->hasFile('image')){
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $product_introduction->image = $filename;
            $product_introduction->name = $request->name;
            $product_introduction->detail = $request->detail;
        }else{
            $product_introduction->image= 'NOPIC.png';
        }
        $product_introduction->save();
        return redirect('/admin/product_introduction');
    }
    public function edit($id){
        $product_introduction = product_introduction::find($id);
        return view('admin.product_introduction.edit',compact('product_introduction'));
    }
    public function update(Request $request,$id){
        $ValidateData = $request->validate([
            'name' => 'required|max:255',
            'detail' => 'required',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        "price.required"=>"กรอกข้อมูลตัวอย่าง",
        ]);
        $product_introduction = new Product_introduction;

        if($request->hasFile('image')){
            $product_introduction = Product_introduction::find($id);
            if($product_introduction->imgs !='NOPIC.png '){
                File::delete(public_path().'/admin/imgs/'.$product_introduction->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $product_introduction->image = $filename;
            $product_introduction->name = $request->name;
        $product_introduction->detail = $request->detail;
        }else{
            $product_introduction = Product_introduction::find($id);
            $product_introduction->name = $request->name;
        $product_introduction->detail = $request->detail;
        }
        $product_introduction->save();
        return redirect('/admin/product_introduction');
    }
    public function delete($id){
        $delete =Product_introduction::find($id);
        if ($delete->imgs !='NOPIC.png ') {
            File::delete(public_path().'/admin/imgs/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('product_introduction');
    }


    }
