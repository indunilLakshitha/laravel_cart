<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }


    public function additems(Request $request){
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_qty_available=$request->product_qty_available;
        $product->description=$request->description;
        $product->save();
        return view('admin.index');
    }
}
