<?php

namespace App\Http\Controllers;

use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
//use Facade\FlareClient\Stacktrace\Flie;
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
            'name' => 'required|unique:address|max:255',
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
            $address->name = $request->name;
        }else{
            $address = address::find($id);
            $address->name = $request->name;
        
            
        }
        $address->save();
        return redirect('/admin/address');
    }
    public function edit($id){
        $address = address::find($id);
        return view('admin.address.edit',compact('address'));
    }
    public function update(Request $request,$id){
        $ValidateData = $request->validate([
            'name' => 'required|max:255',
        ],
        [
        "name.required"=>"ต้องกรอกชื่อสินค้า",
        "name.max"=>"กรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
        ]);
        $address = new Address;
     
        if($request->hasFile('image')){
            $address = Address::find($id);
            if($address->imgs !='NOPIC.png '){
                File::delete(public_path().'/admin/imgs/'.$address->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/imgs/' ,$filename);
            Image::make(public_path().'/admin/imgs/' .$filename);
            $address->image = $filename;
            $address->name = $request->name;
        }else{
            $address = Address::find($id);
            $address->name = $request->name;
        }
        $address->save();
        return redirect('/admin/address');
    }
    public function delete($id){
        $delete =Address::find($id);
        if ($delete->imgs !='NOPIC.png ') {
            File::delete(public_path().'/admin/imgs/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('address');
    }
    }

