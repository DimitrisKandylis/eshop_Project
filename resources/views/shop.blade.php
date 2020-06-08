@extends('layouts.app')

@section('title',' - Shop')

@section('content')
<div class="container" style="margin-top:4% !important;margin-bottom:4% !important;">
  <div class="row justify-content-center">
    <!-- To plaino menu -->
    <div class="col-md-2">
      <ul class="list-group list-group-flush" id="shop_side_menu">
        <li class="list-group-item list-group-item-action"><a href="{{ route('shop.index') }}" class="shop_links">All Products</a></li>
        @foreach($categories as $category)
        <li class="list-group-item list-group-item-action">
          <div class="btn-group">
            <a href="{{ route('shop.ciders_index') }}" class="shop_links">{{$category->name}}</a>
            @if($category->name == "Beers")
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              <a href="{{ route('shop.type_index') }}" class="dropdown-item shop_links">Types</a>
              <a href="{{ route('shop.brewery_index') }}" class="dropdown-item shop_links">Breweries</a>
              <a href="{{ route('shop.abv_index') }}" class="dropdown-item shop_links">ABV</a>
            </div>
            @endif
          </div>
        </li>
        @endforeach
      </ul>
    </div>
    <!-- To card pou dhmiourgeitai gia ka8e product -->
    <div class="col-md-10">
      <div class="card" style="margin-bottom:1%;">
        <div class="card-header">Welcome to our Shop</div>

        <div class="card-body">
          <div class="row" style="margin-left:-25px;">
          @foreach ($products as $product)
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 product_col">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$product->img}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <p class="card-text">{{$product->info}}</p>
                  <label>Price: {{$product->price}}$</label>
                  <br>
                  <label>Type: {{$product->type}}</label>
                  <br>
                  <label>Brewery: {{$product->brewery}}</label>
                  <br>
                  <label>ABV: {{$product->abv}}</label>
                  <br>
                  <a href="{{route('shop.page', ['name' => $product->name])}}" class="btn btn-primary" style="margin-top:5px;">Check it</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
