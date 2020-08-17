<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\Product;


class LoginController extends Controller
{
  public function index(){
    return view('login.login');
  }

  public function login(Request $request){

    $featured_products=Product::where('info','featured')->get();
    $latest_products=Product::where('info','latest')->get();

        $user =User::where('email',$request->email)->first();
        // $NEW_P=Hash::make($request->password);
        // return $NEW_P;
        if($user->password ==$request->password){
            $user->remember_token="l";
            $user->save();
            return view('customer.index',compact('featured_products','latest_products','user'));
        }else{
            return view('login.login');
        }
        // if($user && Hash::check($request['password'],$user['password'])){
            // return view('customer.index',compact('featured_products','latest_products','user'));
            // return "s";
        //  }else{
            // return view('login.login');
            // return "dsadsa";
        //  }




    //    dd($user);


  }


}
