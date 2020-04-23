@extends('layouts.app')

@section('title',' - Shop - Brewery')

@section('content')
<div class="container" style="margin-top:4% !important;margin-bottom:4% !important;">
  <div class="row justify-content-center">
    <!-- To plaino menu -->
    <div class="col-md-2">
      <ul class="list-group list-group-flush" id="shop_side_menu">
        <li class="list-group-item"><a href="{{ route('shop.index') }}" class="shop_links">All Products</a></li>
        <li class="list-group-item"><a href="{{ route('shop.type_index') }}" class="shop_links">Types</a></li>
        <li class="list-group-item"><a href="{{ route('shop.brewery_index') }}" class="shop_links">Breweries</a></li>
        <li class="list-group-item"><a href="{{ route('shop.abv_index') }}" class="shop_links">ABV</a></li>
      </ul>
    </div>
    <!-- To card pou dhmiourgeitai gia ka8e product symfwna me to brewery tous -->
    <div class="col-md-10">
      <div class="card" style="margin-bottom:1%;">
        <div class="card-header">Cruise by Brewery</div>

        <div class="card-body">
          @foreach ($breweries as $brewery)
          <h4 class="type_header">{{$brewery}}</h4>
          <div class="row type_row" style="margin-left:-25px;">
            @foreach ($products as $product)
              @if($product->brewery == $brewery)
              <div class="col-md-4 product_col">
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
            @endif
          @endforeach
        </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
