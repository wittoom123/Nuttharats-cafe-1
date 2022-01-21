<?php

namespace App\Http\Controllers;

use App\coffee_history;
use App\product_introduction;
use App\Product;
use App\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Image;
use Facade\FlareClient\Stacktrace\Flie;
use File;


class IndexController extends Controller
{
    public function index(){
        $coffee_history = coffee_history::all();
        $address = address::all();
        $product_introduction = product_introduction::all();
        $product = Product::all();
        return view('welcome',compact('coffee_history','product','product_introduction','address'));
        
    }
    
}