@extends('layouts.app')

@section('title',' - Shop - My Cart')

@section('content')
<div class="container" style="margin-bottom:2% !important;">
  <div class="row" style="margin-top:3%;">
    <!-- O pinakas twn proiontwn -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-header">My Cart</div>

        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Brewery</th>
                <th scope="col">Abv.</th>
                <th scope="col">Price</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <th scope="row">{{$product->name}}</th>
                <td>{{$product->brewery}}</td>
                <td>{{$product->abv}}</td>
                <td>{{$product->price}}$</td>
                <td><a class="btn btn-sm btn-danger" style="color:white;" href="{{route('my_cart.remove', ['product_id' => $product->id])}}">x</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <hr>
          <label>Total Price: {{$total_price}}$</label>
          <a class="btn btn-md btn-primary" href="" style="margin-left:2%;">Checkout</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
