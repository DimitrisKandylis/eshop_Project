<?php

namespace App\Http\Controllers;

use Auth;
use App\Cart;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function homepage_index()
   {
       $products = Product::all();
       return view('home')->with('products', $products);
   }

    public function index()
    {
      $user_id = Auth::id();
      $user_name = User::where('id', $user_id)->value('name');
      $user_email = User::where('id', $user_id)->value('email');

      return view('user_profile')->with('username', $user_name)->with('email', $user_email);
    }

    public function cart()
    {
      $customer_id = Auth::id();
      $cart_entry = Cart::where('customer_id', $customer_id)->get();
      $products_in_cart = collect();
      foreach ($cart_entry as $entry) {
        $products_in_cart->push(Product::where('id', $entry->product_id)->first());
      }
      $total_price = 0;
      foreach ($products_in_cart as $product) {
        $total_price = $total_price + $product->price;
      }
      //dd($products_in_cart)->all();
      return view('my_cart')->with('products', $products_in_cart)->with('total_price', $total_price);
    }

    public function cart_add($product_id)
    {
      $user_id = Auth::id();
      $user_email = User::where('id', $user_id)->value('email');
      $cart_new = new Cart;
      $cart_new->customer_id = $user_id;
      $cart_new->customer_email = $user_email;
      $cart_new->product_id = $product_id;
      $cart_new->save();
      return redirect()->back();
    }

    public function remove($product_id)
    {
      $user_id = Auth::id();
      $cart = Cart::where('customer_id', $user_id)->where('product_id', $product_id)->first();
      $cart->delete();
      return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
