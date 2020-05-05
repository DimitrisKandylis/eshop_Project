<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lorem') }}@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/brute_def.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
      <nav class="" id="topbar">
          <div class="container">
            <label>info@lorem.com | +66 859038213</label>
            <div class="topbar_social">
              <a href="#"><img src="{{url('/photos/facebook.png')}}" width="22px"></img></a>
              <a href="#"><img src="{{url('/photos/instagram.png')}}" width="22px"></img></a>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="banner">
            <div class="container">



                <a class="navbar-brand" href="{{ route('homepage_index') }}">
                    <!-- <img src="{{ asset('photos/sample-logo2.png') }}" width="" height="80" id="banner_logo"></img> -->
                    <h2 style="color:#fff;">Lorem</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                      <ul class="navbar-nav mr-auto" id="main_navigation" style="margin-left:35%;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('homepage_index') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about_us">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">{{ __('Contact') }}</a>
                        </li>
                      </ul>


                    <!-- Right Side Of Navbar -->

                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop.index') }}"><img src="{{url('/photos/bag.png')}}" width="25px"></img></a>
                        </li>
                          <!-- Authentication Links -->
                          @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}"><img src="{{url('/photos/user.png')}}" width="27px"></img></a>
                              </li>
                          @else
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('profile.index') }}"><img src="{{url('/photos/user.png')}}" width="27px"></img></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><img src="{{url('/photos/logoff.png')}}" width="27px"></img></a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </li>
                          @endguest
                      </ul>


                </div>

          </div>
        </nav>

        <main class="py-4" style="padding-top: 0rem!important;">
            @yield('content')
        </main>

        <nav class="navbar navbar-expand-md navbar-light shadow-sm" id="banner">
            <div id="footer">
              <label id="footer_label">©2020 Lorem Ipsum</label>
            </div>
        </nav>

    </div>
</body>
</html>
