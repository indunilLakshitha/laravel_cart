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

        if($request->hasFile('img_pro')){
            $filenameWithExt = $request->file('img_pro')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('img_pro')->getClientOriginalExtension();
            $profilenameToStore = $filename.'_'.time().'.'.$extension; 
            $path = $request->file('img_pro')->storeAs('public/images',$nicfilenameToStore);

        }
        else{
            $profilenameToStore ='noimage.jpg';
        }
        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_qty_available=$request->product_qty_available;
        $product->description=$request->description;
        $product->image=$profilenameToStore;
        $product->save();
        return view('admin.index');
    }
}
