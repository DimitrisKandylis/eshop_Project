@extends('homepage')

@section('card_content')
<div class="card">
  <div class="card-header">Dashboard</div>
  <img src="{{url('/photos/banner.jpg')}}" class="card-img-top" alt="..." style="border-radius:0% 0% 1% 1%;">

  <div class="card-body" style="text-align:center;">
    <h3 style="margin-top:1%;margin-bottom:3%;">Welcome to Orion Space Station</h3>
    <hr style="border-top: 3px solid #99FFCC;margin-top:-2.5%;width:30%;">
    <p>
      Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    </p>
    <hr style="margin:3% 0 3% 0;">
    <h3 style="margin-top:1%;">Take a Tour</h3>
    <hr style="border-top: 3px solid #99FFCC;margin-top:-1%;width:10%;margin-bottom:5%;">
    <span style="margin-bottom:5%;">
      <a href="{{route('planets.index')}}"><img src="{{url('/photos/planet_icon.png')}}" alt="..." width="100" height="100" class="dash_icons"></a>
      <a href="{{route('spaceships.index')}}"><img src="{{url('/photos/spaceship_icon.png')}}" alt="..." width="100" height="100" class="dash_icons" style="margin-left:10%;"></a>
      <a href="/contact"><img src="{{url('/photos/contact_icon.png')}}" alt="..." width="100" height="100" class="dash_icons" style="margin-left:10%;"></a>
    </span>
    <hr style="margin:5% 0 3% 0;">
    <p>
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    </p>
  </div>
</div>
@endsection
