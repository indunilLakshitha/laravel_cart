<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        //
    }

    public function addToCart(Request $request)
    {
        // return $request;

        $featured_products=Product::where('info','featured')->get();
        $latest_products=Product::where('info','latest')->get();
        $user=User::where('remember_token','l')->first();

        $product=Product::where('id',$request->id)->first();
        // return $product;
        $cart_item=new Cart();

        $cart_item->customer_id=$user->id;
        $cart_item->product_id=$request->id;
        $cart_item->qty=$request->qty;

        $each=$product->product_price;
        $total=$each*($request->qty);
        $cart_item->total=$total;
        $cart_item->save();

        $cart=Cart::where('customer_id',$user->id)->count();
        return view('customer.index',compact('featured_products','latest_products'));

    }


    public function checkout()
    {
        $user=User::where('remember_token','l')->first();
        $items=Cart::where('customer_id',$user->id)->get();
        $cus_id=$user->id;
        $total=DB::table("carts")->where('customer_id',$user->id)->get()->sum("total");
        // return $items;
        return view('customer.checkout',compact('items','total','cus_id'));
    }


    public function pay()
    {
        $user=User::where('remember_token','l')->first();
        Cart::where('customer_id',$user->id)->update(['status','paid']);
        return view('customer.index',compact('featured_products','latest_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
