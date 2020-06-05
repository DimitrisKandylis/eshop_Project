@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/photos/slide1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="/photos/slide2.jpg" alt="Chicago" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


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

<div class="container">
  <div class="row">
    <div class="col-3 beer_icon_links">
      <img src="/photos/lager.jpg" width="150"></img>
      <h6>Lager</h6>
    </div>
    <div class="col-3 beer_icon_links">
      <img src="/photos/bok.jpg" width="150"></img>
      <h6>Bock</h6>
    </div>
    <div class="col-3 beer_icon_links">
      <img src="/photos/stout.jpg" width="150"></img>
      <h6>Stout</h6>
    </div>
    <div class="col-3 beer_icon_links">
      <img src="/photos/weiss.jpg" width="150"></img>
      <h6>Weiss</h6>
    </div>
  </div>
</div>

<div class="container home_imgs_cont">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home_imgs">
      <a href=""><img src="/photos/home1.jpg" width="450"></img></a>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 home_imgs">
      <a href=""><img src="/photos/home2.jpg" width="450"></img></a>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom:4% !important;text-align:center;">
  <h4>Latest Products</h4>
  <hr class="prod_hr">
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

  <div class="row" style="padding-left: 40px; margin-top:3%;">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- 4o proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(3)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(3)->name}}</h5>
          <p class="card-text">{{$products->get(3)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(3)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(3)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- 5o proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(4)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(4)->name}}</h5>
          <p class="card-text">{{$products->get(4)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(4)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(4)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" class="latest_div">
      <!-- 6o proion -->
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$products->get(5)->img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$products->get(5)->name}}</h5>
          <p class="card-text">{{$products->get(5)->info}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Type: {{$products->get(5)->type}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('shop.page', ['name' => $products->get(5)->name])}}" class="btn btn-primary btn-block">Check it</a>
        </div>
      </div>
    </div>

  </div>

</div>
<!-- Newsletter form -->
<div class="row" style="width:100%;margin-right:0!important;margin-left:0!important;margin-bottom: -24px;">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="newsletter_div">
    <div id="newsletter_div_inner">
      <h4>Fill the form below to subscribe to our Newsletter.</h4>
      <hr class="news_hr">
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
          <small id="emailHelp" class="form-text text-muted" style="color:#fff!important;">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary" id="submit_button_form">Submit</button>
      </form>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="newsletter_img">

  </div>
</div>
@endsection
