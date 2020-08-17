<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class RegisterController extends Controller
{
    public function index(){
        return view('login.register');
      }

      public function register(Request $request){
        //   return $request;
        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        // $user->password=Hash::make($request->password);
        $user->password=$request->password;

        $user->save();
        return view('login.login');

      }
}
