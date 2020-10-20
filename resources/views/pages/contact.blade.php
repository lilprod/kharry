
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="GrayGrids Team">
<title>@lang('contact.page_title') | {{config('app.name', 'Kharry')}}</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{asset('/assets/assets/css/jasny-bootstrap.min.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/css/material-kit.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/css/main.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/extras/animate.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.carousel.css') }}" type="text/css">
<link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.theme.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/css/responsive.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/assets/assets/css/slicknav.css') }}" type="text/css">

<style>
        #google-map,
        body,
        html {
          padding: 0;
          height: 460px;
        }
      </style>
</head>
<body>

<div class="header">
<nav class="navbar navbar-default main-navigation" role="navigation">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand logo" href="{{ route('index') }}"><img src="assets/assets/img/logo.jpg" alt="" style="width: 80px;height: : 80px;"></a>
    </div>


    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
               @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('contact.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('contact.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('contact.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('contact.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('contact.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('contact.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('contact.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('contact.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('contact.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('contact.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('contact.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('contact.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('contact.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('contact.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('contact.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('contact.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('contact.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('contact.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('contact.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('contact.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('contact.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('contact.logout_menu')
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

  </div>
</nav>


</div>


<div class="page-header" style="background: url(assets/assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="page-title">@lang('contact.page_title')</h2>
        </div>
      </div>
    </div>
  </div>
</div>


<section id="content">
<div class="container">
<div class="row">
<div class="col-md-8">
<h2 class="title-2">
@lang('contact.sub_title')
</h2>


@include('inc.messages')
<form id="contactForm" class="contact-form" data-toggle="validator" method="POST" action="{{route('contact')}}">
  @csrf
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="name" name="name" placeholder="@lang('contact.name')" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="@lang('contact.email')" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" id="subject" name="subject" placeholder="@lang('contact.subject')" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" placeholder="@lang('contact.message')" name="message" rows="10" data-error="Write your message" required></textarea>
 <div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<button type="submit" id="submit" class="btn btn-common">@lang('contact.sending_button')</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-md-4">
<h2 class="title-2">
@lang('contact.title_2')
</h2>
<div class="information">
<div class="contact-datails">
<div class="icon">
<i class="fa fa-map-marker icon-radius"></i>
</div>
<div class="info">
<h3>@lang('contact.address')</h3>
<span class="detail">@lang('contact.main_office'): Montreal,Canada</span>
</div>
</div>
  <!--<div class="contact-datails">
    <div class="icon">
    <i class="fa fa-phone icon-radius"></i>
    </div>
    <div class="info">
    <h3>@lang('contact.phone_number')</h3>
    <span class="detail">@lang('contact.customer_service'): +1 (514) 629 5723 </span>
    </div>
  </div>-->
<div class="contact-datails">
<div class="icon">
<i class="fa fa-location-arrow icon-radius"></i>
</div>
<div class="info">
<h3>@lang('contact.address_email')</h3>
<span class="detail">@lang('contact.customer_service'): info@kharry.com</span><br>
<span class="detail">@lang('contact.finance_service'): payments@kharry.com</span><br>
<span class="detail">@lang('contact.technical_support'): service@kharry.com</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--<div id="google-map"></div>-->


<footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0s">
              <div class="widget">
                <h3 class="block-title">@lang('contact.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('contact.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('contact.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('contact.home_menu')</a></li>
                  <li><a href="{{ route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('contact.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('contact.contact_menu')</a></li>
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


<a href="#" class="back-to-top">
<i class="fa fa-angle-up"></i>
</a>

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
<script type="text/javascript" src="{{asset('/assets/assets/js/form-validator.min.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/assets/js/contact-form-script.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{asset('/assets/assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="assets/js/bootstrap-select.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCkYz77AFlEaL7R7tQU_K3C67i05a92yss">
    </script>

<script type="text/javascript">
    var map;
    var plain = new google.maps.LatLng(50.8452321, 4.3577968,17.29);
    var mapCoordinates = new google.maps.LatLng(50.8452321, 4.3577968,17.29);       
    var markers = [];
    var image = new google.maps.MarkerImage(
      'assets/img/map-marker.png',
      new google.maps.Size(84, 70),
      new google.maps.Point(0, 0),
      new google.maps.Point(60, 60)
    );    
    function addMarker() {
      markers.push(new google.maps.Marker({
        position: plain,
        raiseOnDrag: false,
        icon: image,
        map: map,
        draggable: false
      }));      
    }    
    function initialize() {
      var mapOptions = {
        backgroundColor: "#ffffff",
        zoom: 15,
        disableDefaultUI: true,
        center: mapCoordinates,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
          "featureType": "landscape.natural",
          "elementType": "geometry.fill",
          "stylers": [{
            "color": "#ffffff"
          }
                     ]
        }
                 , {
                   "featureType": "landscape.man_made",
                   "stylers": [{
                     "color": "#ffffff"
                   }
                               , {
                                 "visibility": "off"
                               }
                              ]
                 }
                 , {
                   "featureType": "water",
                   "stylers": [{
                     "color": "#80C8E5"
                   }
                               , {
                                 "saturation": 0
                               }
                              ]
                 }
                 , {
                   "featureType": "road.arterial",
                   "elementType": "geometry",
                   "stylers": [{
                     "color": "#999999"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text.stroke",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#333333"
                   }
                              ]
                 }
                 
                 , {
                   "featureType": "road.local",
                   "stylers": [{
                     "color": "#dedede"
                   }
                              ]
                 }
                 , {
                   "featureType": "road.local",
                   "elementType": "labels.text",
                   "stylers": [{
                     "color": "#666666"
                   }
                              ]
                 }
                 , {
                   "featureType": "transit.station.bus",
                   "stylers": [{
                     "saturation": -57
                   }
                              ]
                 }
                 , {
                   "featureType": "road.highway",
                   "elementType": "labels.icon",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 , {
                   "featureType": "poi",
                   "stylers": [{
                     "visibility": "off"
                   }
                              ]
                 }
                 
                ]
        
      }
          ;
      map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
      addMarker();
      
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</body>
</html>
