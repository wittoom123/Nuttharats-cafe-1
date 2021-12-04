<?php

namespace App\Http\Controllers;

use App\coffee_history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use Facade\FlareClient\Stacktrace\Flie;
use File;


class coffee_historyController extends Controller
{
    public function index(){
        $coffee_history = coffee_history::all();
        return view('admin.coffee_history.index',compact('coffee_history'));
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
        $coffee_history = new Coffee_history;
        $coffee_history->name = $request->name;
        $coffee_history->detail = $request->detail;
        if($request->hasFile('image')){
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $coffee_history->image = $filename;
            
        }else{
            $coffee_history->image= 'NOPIC.png';
        }
        $coffee_history->save();
        return redirect('/admin/coffee_history');
    }

    
}