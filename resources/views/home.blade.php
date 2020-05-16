@extends('layouts.app')

@section('content')
<section class="bgimage_home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1>Lorem ipsum dolor sit amet</h1>
        <h4>Company Slogan</h4>
      </div>
    </div>
  </div>
</section>
<div class="container" style="margin-bottom:4% !important;" id="home_info">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
      <img src="{{url('/photos/hom.png')}}" width="10%" style="margin-bottom:1%;"></img>
      <h4 style="margin-bottom:2%;">About us</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In dui enim, tempor quis lacinia sit amet, tincidunt at est. Proin condimentum leo eget enim vehicula, et faucibus leo tincidunt. In bibendum urna non augue placerat, quis dictum purus condimentum. Nunc dignissim risus et sapien fringilla, non imperdiet nibh dictum. Phasellus tempus sapien sit amet sem pretium congue at in urna. Morbi porta viverra ligula sit amet pellentesque. Donec faucibus interdum volutpat. Sed bibendum porta mi in dictum. Cras sed lacus in ante semper semper. Quisque condimentum vehicula tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin faucibus consectetur tristique.

      Donec non turpis quis magna dignissim volutpat. Aenean at justo vitae erat fringilla efficitur eget ut lacus. Proin nec dolor at justo condimentum dignissim quis eget nisl. Vestibulum sapien risus, iaculis in purus non, euismod sodales erat. Nunc interdum, leo ac bibendum eleifend, ipsum neque aliquet felis, vel ultrices odio lorem eget mi. Mauris tempus ut dui et eleifend. Praesent sed neque in nulla cursus dapibus. Phasellus ut nulla quis massa suscipit efficitur vitae a nunc. Suspendisse potenti. Nunc eget elit nisi. Donec placerat nisl non lectus dignissim finibus. Mauris rhoncus luctus risus at interdum. Suspendisse bibendum ipsum purus, eu pulvinar neque rhoncus at. Aliquam mattis eget eros id ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
      <br>
      <a class="btn btn-md btn-primary" href="/about_us" style="margin-top:3%;">Learn more</a>
    </div>
  </div>
</div>
<div class="container" style="margin-bottom:4% !important;max-width: 100% !important;" id="serv_dark">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top:8%;padding-bottom:11%;text-align:center;">
      <img src="{{url('/photos/beer.png')}}" width="20%" style="margin-bottom:2%;"></img>
      <h4 style="margin-bottom:2%;">Our Products</h4>
      <br>
      <p>
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
      </p>
      <br>
      <a class="btn btn-md btn-info" href="{{ route('shop.index') }}" style="margin-top:2%;">Visit our Shop</a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="home_col_beer">

    </div>
  </div>
</div>

<div class="container" style="margin-bottom:4% !important;text-align:center;">
  <h4 style="margin-bottom:3%;">Latest Products</h4>
  <div class="row" style="padding-left: 40px;">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- prwto proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(0)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(0)->name}}</h5>
          <p class="card-text">{{$products->get(0)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(0)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(0)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- deutero proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(1)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(1)->name}}</h5>
          <p class="card-text">{{$products->get(1)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(1)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(1)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- trito proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(2)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(2)->name}}</h5>
          <p class="card-text">{{$products->get(2)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(1)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(2)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="row" style="width:100%;margin-right:0!important;margin-left:0!important;margin-bottom: -24px;">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="newsletter_div">
    <div id="newsletter_div_inner">
      <h4>Fill the form below to subscribe to our Newsletter.</h4>
      <br>
      <form id="contact_form">
        <div class="form-group">
          <label for="exampleInputFName">Firstname</label>
          <input type="text" class="form-control" id="newsletter_firstname_input" aria-describedby="firstnameHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputName">Surname</label>
          <input type="text" class="form-control" id="newsletter_surname_input" aria-describedby="surnameHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="newsletter_email_input" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary" id="submit_button_form">Submit</button>
      </form>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="newsletter_img">

  </div>
</div>
@endsection
