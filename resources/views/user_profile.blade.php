@extends('layouts.app')

@section('title',' - My Profile')

@section('content')
<div class="container" style="margin-top:4% !important;margin-bottom:4% !important;">
  <div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card" style="margin-bottom:42%;">
        <div class="card-header">My Profile</div>

        <div class="card-body" id="profile_banner">
          <div style="text-align:center;margin-top:6%;">
            <img src="{{url('/photos/avatar_sample.jpg')}}"></img>
            <h4 style="margin-top:1%;">{{$username}}</h4>
            <h5>{{$email}}</h5>
            <a href="{{ route('profile.cart') }}" class="btn btn-md btn-primary" style="margin-top:1%;">My Cart</a>
          </div>
          <h4>Bio</h4>
          <p>
            Duis eget ipsum turpis. Pellentesque egestas, enim at eleifend convallis, lorem lorem bibendum nulla, semper sagittis sapien nisl nec dui. Integer pulvinar, sapien eget molestie mattis, ante arcu efficitur risus, et imperdiet nisi ante eu purus. Fusce sed erat non nulla suscipit laoreet sed nec urna. Pellentesque sed ipsum tortor. Vestibulum vitae leo lectus. Aliquam a magna at erat tincidunt maximus vitae ac risus. Vivamus elementum, nunc nec elementum mollis, justo lectus egestas est, hendrerit aliquam enim sem nec dui. Fusce efficitur nisl non auctor condimentum. Nunc eu neque sit amet est feugiat cursus vel id orci. Nunc commodo sit amet magna nec pretium. Etiam dignissim laoreet suscipit. Proin id leo interdum, bibendum metus ultricies, dapibus turpis.

            In ornare mi dapibus, semper arcu id, vehicula libero. Nullam eu leo tempor, rhoncus purus eget, ultrices risus. Maecenas sit amet iaculis felis. Sed id augue sed mauris iaculis egestas. Vivamus sollicitudin, ligula eget posuere scelerisque, risus lacus viverra sem, a laoreet eros felis eu quam. Morbi hendrerit gravida ipsum. Fusce condimentum justo sit amet enim venenatis, molestie accumsan tortor iaculis. Proin non tortor sapien. Integer quis bibendum est. Morbi nisi est, ullamcorper ut metus sed, mattis sodales turpis. Vestibulum non purus in velit pellentesque cursus ac ut leo. Morbi at leo quis urna ullamcorper ornare nec in purus. Pellentesque vestibulum risus et viverra egestas. In ligula lorem, malesuada in posuere non, pretium eget nisl.
          </p>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
