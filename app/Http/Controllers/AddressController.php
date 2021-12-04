<?php

namespace App\Http\Controllers;

use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use Facade\FlareClient\Stacktrace\Flie;
use File;


class AddressController extends Controller
{
    public function index(){
        $address = address::all();
        return view('admin.address.index',compact('address'));
    }
    public function create(Request $request)
    {
        $ValidateData = $request->validate([
            'name' => 'required|unique:products|max:255',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        "name.unique"=>"มีชื่อประเภทสินค้านี้อยู่แล้ว",
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        ]);
        $address = new Address;
        $address->name = $request->name;
        if($request->hasFile('image')){
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $address->image = $filename;
            
        }else{
            $address->image= 'NOPIC.png';
        }
        $address->save();
        return redirect('/admin/address');
    }

    
}