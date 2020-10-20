<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>@lang('home.home_menu') | {{config('app.name', 'Kharry')}} </title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css') }}" type="text/css">
    
    <link rel="stylesheet" href="{{asset('/assets/assets/css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/font-awesome.min.css') }}" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/main.css') }}" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.theme.css') }}" type="text/css">    
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/responsive.css') }}" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/slicknav.css') }}" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap-select.min.css') }}">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4"></script>
  </head>

  <body>  
    <!-- Header Section Start -->
    <div class="header">   
          <nav class="navbar navbar-default main-navigation" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{asset('/assets/assets/img/logo.jpg') }}" alt="" style="width: 80px;height: 80px;"></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('home.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('home.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('home.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('home.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('home.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('home.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('home.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('home.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('home.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('home.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('home.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('home.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('home.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('home.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('home.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('home.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('home.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('home.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('home.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('home.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('home.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('home.logout_menu')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                        </ul>
                    </li>

                    <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                    <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>

                    @can('Roles Administration & Permission')
                    <li class="postadd">
                      <a class="btn btn-danger btn-post" href="{{ route('dashboard') }}"><span class="fa fa-dashboard"></span> Dashboard</a>
                    </li>
                    @endcan
                    
              @endguest
            </ul>
          </div>
          <!-- Navbar End -->
        </div>
      </nav>
      
      
    </div>
    <!-- Header Section End -->

    <!-- Start intro section -->
  <section id="intro" class="section-intro">
      <div class="overlay">
        <div class="container">
          <div class="main-text">
            <h1 class="intro-title">@lang('home.intro_title') <span style="color: #3498DB">@lang('home.kharry')</span></h1>
              <p class="sub-title" style="text-transform: none;">@lang('home.sub_title')</p>

            <!-- Start Search box -->
            <div class="row search-bar">
              <div class="advanced-search">
                <form class="search-form" method="POST" action="{{ route('search') }}">
                  @csrf

                  <!--<div class="col-md-3 col-sm-6 search-col">
                    <div class="form-group is-empty">
                          <div class="autocomplete">
                            <input class="form-control" type="text" placeholder="@lang('home.departure_city')" name="departure_city">
                            <span class="close">Cancel</span>
                            <div class="dialog">   
                            </div>
                          </div> 
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="form-group is-empty">
                      <div class="autocomplete_">
                            <input class="form-control keyword" type="text" placeholder="@lang('home.arrival_city')" name="arrival_city">
                            <span class="close_">Cancel</span>
                            <div class="dialog_">   
                            </div>
                      </div>
                    </div>
                  </div>-->

                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="">
                          <input class="form-control keyword" name="departure_city" placeholder="@lang('home.departure_city')" type="search" id="city">                      
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 search-col">
                    <div class="input-group-addon search-category-container">
                      <label class="">
                        <input class="form-control keyword" name="arrival_city" placeholder="@lang('home.arrival_city')" type="search" id="city1">                                    
                      </label>
                    </div>
                  </div>

                  <div class="col-md-3 col-sm-6 search-col">
                    <input class="form-control is-empty" name="departure_date" value="{{$date}}" type="date" id="date" onchange="setCorrect(this);">
                  </div>

                  <div class="col-md-3 col-sm-6 search-col">
                    <button class="btn btn-common btn-search btn-block" type="submit"><strong>@lang('home.button_search')</strong></button>
                  </div>

                </form>

                

              </div>
            </div>
            <!-- End Search box -->
          </div>
        </div>
      </div>
    </section>

  <div class="wrapper">
<!-- Categories Homepage Section Start -->
      <section id="categories-homepage">
        <div class="container">
          <div class="row text-center">
            <div class="ad-detail-content">
              <!--<p>@lang('home.function_text')</p>-->
              <!--<p>
                @if(Config::get('app.locale') == 'en')
                {{'English'}}
                @elseif(Config::get('app.locale') == 'fr')
                  {{'Français'}}
                @endif
              </p>-->
              <a rel="nofollow" href="{{route('faq')}}" class="btn btn-danger btn-lg">@lang('home.function_button')</a>
            </div>
          </div>
        </div>
      </section>

      @if($nbre > 0)

      @if(Config::get('app.locale') == 'en')

    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-md-offset-4">
            <h3 class="section-title">@lang('mytrips.latest_trip')</h3>
          </div>
          
        <div class="col-lg-12">

          @foreach ($tripannounces as $tripannounce)
          <div class="col-lg-6">

              <a href="{{route('pages.detail', $tripannounce->id)}}"><h4 class="title-2" style="color: #2fbecc"><strong>@lang('mytrips.departure_date') : </strong> {{ $tripannounce->departure->format('l j F Y' ) }}</h4></a>
              
                <div class="col-md-5">
                  <p class="mb15"> <strong> <i class="fa fa-map-marker"></i> @lang('mytrips.departure_city') :</strong>
                  {{ $tripannounce->departure_city }} </p>

                  <p class="mb15"> <strong> <i class="fa fa-map-marker"></i> @lang('mytrips.arrival_city') :</strong>
                  {{ $tripannounce->arrival_city }} </p>

                  <p class="mb15"> <strong> <i class=" fa fa-user"></i> @lang('mytrips.author') :</strong>  {{$tripannounce->username}}</p>
                  <!--<ul class="list-circle">
                    <li>Posted by <i class=" fa fa-user"></i> {{$tripannounce->username}}</li>
                    <li><a href="#"> <i class=" fa fa-phone"></i> 022445167532 </a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> 2.7 GHz dual-core Intel Core i5 processor</a></li>
                  </ul>-->
                </div>

                  <div class="col-md-5">
                        <p class="mb15 "><strong><i class=" fa fa-money"></i> @lang('mytrips.price') :</strong> {{ $tripannounce->price_kilo }} {{ $tripannounce->currency }} / Kg</p>
                         
                          <p class="mb15"><strong>@lang('mytrips.transport') :</strong>  
                            @if(  $tripannounce->transport  == 'Avion' ) 
                              <i class="fa fa-plane"></i>  
                            @elseif ( $tripannounce->transport  == 'Voiture') 
                               <i class="fa fa-car"></i> 
                            @elseif ( $tripannounce->transport  == 'Conteneur')
                              <i class="fa fa-ship"></i>
                            @elseif( $tripannounce->transport  == 'Train')
                              <i class="fa fa-train"></i>
                            @endif
                          </p>
                         <p class="mb15"><strong><strong><i class=" fa fa-suitcase"></i>  @lang('mytrips.kilo'):</strong> {{$tripannounce->number_kilo }} Kg</p>
                        
                </div>
                <div class="col-md-2">
                  <p><a href="{{ route('pages.newpackage' , $tripannounce->id) }}" class="btn btn-info btn-xs"> <i class="fa fa-check"></i> @lang('search.submit_button')</a></p>
                </div>

            </div>
 
            @endforeach

          </div>
            
        </div>
      </div>
    </div>

    @elseif(Config::get('app.locale') == 'fr')

    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-md-offset-4">
            <h3 class="section-title">@lang('mytrips.latest_trip')</h3>
          </div>
          
        <div class="col-lg-12">

          @foreach ($tripannounces as $tripannounce)
          <div class="col-lg-6">

              <a href="{{route('pages.detail', $tripannounce->id)}}"><h4 class="title-2" style="color: #2fbecc"><strong>@lang('mytrips.departure_date') : </strong> @php setlocale(LC_TIME, 'fr_FR', 'French'); echo($tripannounce->depart); @endphp </h4></a>

              
                <div class="col-md-5">
                  <p class="mb15"> <strong> <i class="fa fa-map-marker"></i> @lang('mytrips.departure_city') :</strong>
                  {{ $tripannounce->departure_city }} </p>

                  <p class="mb15"> <strong> <i class="fa fa-map-marker"></i> @lang('mytrips.arrival_city') :</strong>
                  {{ $tripannounce->arrival_city }} </p>

                  <p class="mb15"> <strong> <i class=" fa fa-user"></i> @lang('mytrips.author') :</strong>  {{$tripannounce->username}}</p>
                  <!--<ul class="list-circle">
                    <li>Posted by <i class=" fa fa-user"></i> {{$tripannounce->username}}</li>
                    <li><a href="#"> <i class=" fa fa-phone"></i> 022445167532 </a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> 2.7 GHz dual-core Intel Core i5 processor</a></li>
                  </ul>-->
                </div>

                  <div class="col-md-5">
                        <p class="mb15 "><strong><i class=" fa fa-money"></i> @lang('mytrips.price') :</strong> {{ $tripannounce->price_kilo }} {{ $tripannounce->currency }} / Kg</p>
                         
                          <p class="mb15"><strong>@lang('mytrips.transport') :</strong>  
                            @if(  $tripannounce->transport  == 'Avion' ) 
                              <i class="fa fa-plane"></i>  
                            @elseif ( $tripannounce->transport  == 'Voiture') 
                               <i class="fa fa-car"></i> 
                            @elseif ( $tripannounce->transport  == 'Conteneur')
                              <i class="fa fa-ship"></i>
                            @elseif( $tripannounce->transport  == 'Train')
                              <i class="fa fa-train"></i>
                            @endif
                          </p>
                         <p class="mb15"><strong><strong><i class=" fa fa-suitcase"></i>  @lang('mytrips.kilo'):</strong> {{$tripannounce->number_kilo }} Kg</p>
                        
                </div>

                <div class="col-md-2">
                  <p><a href="{{ route('pages.newpackage' , $tripannounce->id) }}" class="btn btn-info btn-xs"> <i class="fa fa-check"></i> @lang('search.submit_button')</a></p>
                </div>

            </div>
 
            @endforeach

          </div>
            
        </div>
      </div>
    </div>

    @endif

    @endif

      <!--video section-->
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <div class="blog-post video-post">

              <div class="post-thumb">
                <div class="video-wrapper" style="padding-top: 50%;">
                  @if(Config::get('app.locale') == 'en')
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/7xbyFkQJvA8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  @elseif(Config::get('app.locale') == 'fr')
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/F84HcnQFbCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  @endif
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>

  
      <!-- Categories Homepage Section End -->
    <!-- end intro section -->
    <!-- Featured Listings Start -->
      <!--<section class="featured-lis mb30" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
              <h3 class="section-title">@lang('home.section_title')</h3>
              <div id="new-products" class="owl-carousel">
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar108.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar103.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div> 
                  </div>
                </div>
                
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div> 
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar7.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar24.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar49.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/assets/assets/img/images/ar8.jpg" alt=""> 
                      <div class="overlay">
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div> 
                    </div>   
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>-->
      <!-- Featured Listings End -->
</div>

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0s">
              <div class="widget">
                <h3 class="block-title">@lang('home.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('home.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('home.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('home.home_menu')</a></li>
                  <li><a href="{{ route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('home.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('home.contact_menu')</a></li>
                  <li><a href="{{ route('terms')}}">@lang('condition.page_title')</a></li>
                  <li><a target="_blank" href="https://www.paypal.com/">Paypal</a></li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                    <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
                </ul>
              </div>
            </div> 
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left">
                <p>© Copyright 2019 - Kharry. @lang('home.footer') <a rel="nofollow" href="https://sparkcorporation.org/" target="_blank">SPARK CORPORATION</a></p>
              </div>              
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://www.facebook.com/kharry.kharry.1401"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/KharryI"><i class="fa fa-twitter"></i></a>
                <a class="instagram" target="_blank" href="https://instagram.com/we_kharry"><i class="fa fa-instagram"></i></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Start Loader -->
    <div id="loader">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>    
      
   
    <!-- Main JS  -->
  <script>
    (function() {
      var placesAutocomplete = places({
        appId: 'plJ66D95X1NB',
        apiKey: '76f7480708bd1f7e0d2e0728d7219681',
        container: document.querySelector('#city'),
        templates: {
          value: function(suggestion) {
            return suggestion.name;
          }
        }
      }).configure({
        type: 'city',
        aroundLatLngViaIP: false,
      });

      var placesAutocomplete1 = places({
        appId: 'plJ66D95X1NB',
        apiKey: '76f7480708bd1f7e0d2e0728d7219681',
        container: document.querySelector('#city1'),
        templates: {
          value: function(suggestion) {
            return suggestion.name;
          }
        }
      }).configure({
        type: 'city',
        aroundLatLngViaIP: false,
      });
    })();
  </script>
    
  <script type="text/javascript">
   
      function initialize() {
        var options = {
            types: ['(cities)'],
        };
        var input = document.getElementById('city');
        var autocomplete = new google.maps.places.Autocomplete(input, options);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
 
  </script>

  

  <script type="text/javascript">
  //function to convert enterd date to any format
  function setCorrect(xObj){
    var today = new Date();
    var date = new Date(xObj.value);
    var month = date.getMonth() + 1;
    var day = date.getDate();
    var year = date.getFullYear();
    var monthd = today.getMonth() + 1;
    var dayd = today.getDate();
    var yeard = today.getFullYear();
    console.log(day+' '+ month +' '+year+'\n');
    console.log(dayd+' '+ monthd +' '+yeard);
    if(year<yeard){
        console.log("modif1");
        if (dayd<10) {
          document.getElementById('date').value=yeard+"-"+monthd+"-0"+dayd;
        }else {
          document.getElementById('date').value=yeard + "-" + monthd + "-" + dayd;
        }

    }else if(year=yeard) {
      if(month<monthd){
      console.log("modif2");
      if (dayd<10) {
        document.getElementById('date').value=yeard+"-"+monthd+"-0"+dayd;
      }else {
        document.getElementById('date').value=yeard+"-"+monthd+"-"+dayd;
      }
      }else if(month==monthd) {
        if(day<dayd){
          console.log("modif3");
          if (dayd<10) {
            document.getElementById('date').value=yeard+"-"+monthd+"-0"+dayd;
          }else {
            document.getElementById('date').value=yeard+"-"+monthd+"-"+dayd;
          }
        }
      }
    }
    /*if(day<dayd && month<monthd && year<yeard){

        console.log("success");
    }else {
      console.log("fucked");
    }*/
  }
  </script>

  <script type="text/javascript" src="{{asset('/assets/assets/js/jquery-min.js') }}"></script>      
  <script type="text/javascript" src="{{asset('/assets/assets/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/material.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/material-kit.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/wow.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/main.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/waypoints.min.js') }}"></script>
  <script type="text/javascript" src="{{asset('/assets/assets/js/jasny-bootstrap.min.js') }}"></script>
  <script src="{{asset('/assets/assets/js/bootstrap-select.min.js') }}"></script>
    
  </body>
</html>