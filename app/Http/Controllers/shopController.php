<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop')->with('products', $products);
    }

    public function type_index()
    {
        $products = Product::all();
        $types = array();
        $types = Product::pluck('type')->unique();
        return view('shop_types')->with('products', $products)->with('types', $types);
    }

    public function brewery_index()
    {
        $products = Product::all();
        $breweries = array();
        $breweries = Product::pluck('brewery')->unique();
        return view('shop_breweries')->with('products', $products)->with('breweries', $breweries);
    }

    public function abv_index()
    {
        $products = Product::all();
        $abv = array();
        $abv = Product::pluck('abv')->unique();
        return view('shop_abv')->with('products', $products)->with('abv', $abv);
    }

    public function page($name)
    {
        $product = Product::where('name', $name)->first();

        return view('shop_product')->with('product', $product);
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
