<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>@lang('register.register_menu') | {{config('app.name', 'Kharry')}}</title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css') }}" type="text/css">    
    <link rel="stylesheet" href="{{asset('/assets/assets/css/jasny-bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets/assets/css/jasny-bootstrap.min.css') }}" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/font-awesome.min.css') }}" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/main.css') }}" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/animate.css') }}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets/assets/extras/settings.css') }}" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/responsive.css') }}" type="text/css">
        <!-- Bootstrap Select -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap-select.min.css') }}">  

    <link rel="stylesheet" href="{{asset('/assets/assets/build/css/intlTelInput.css') }}">

    
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
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('register.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('register.tripannounce_menu')</a></li>
              <li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('register.receivepackage_menu')</a></li>
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('register.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('register.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('register.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('register.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('register.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('register.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('register.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('register.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('register.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('register.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('register.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('register.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('register.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('register.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('register.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('register.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('register.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('register.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('register.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('register.logout_menu')
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
      <!-- Off Canvas Navigation -->
      
      
    </div>
    <!-- Header Section End -->

    <!-- Page Header Start -->
    <div class="page-header" style="background: url(assets/assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">@lang('register.page_title')</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="page-login-form box">
              <h3>
                @lang('register.title')
              </h3>
              <form role="form" class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="@lang('register.name')" value="{{ old('name') }}" onkeyup="changeToLowerCase(this)" required autofocus>
                  </div>
                  
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  
                </div>
                
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" id="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" placeholder="@lang('register.firstname')" value="{{ old('firstname') }}" onkeyup="changeToLowerCase(this)" required>
                  </div>
                  
                  @if ($errors->has('firstname'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('firstname') }}</strong>
                      </span>
                  @endif
                  
                </div>
                
                 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-envelope"></i>
                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="@lang('register.email_address')" value="{{ old('email') }}" required>
                  </div>
                  
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                  
                </div> 
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-phone"></i>
                    <input id="output" type="hidden" name="phone_number" value=""/>
                    <input type="tel" id="phone" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ old('phone_number') }}"  onkeypress="return nbre(event)" required>
                  </div>
                  @if ($errors->has('phone_number'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('phone_number') }}</strong>
                      </span>
                  @endif
                </div> 
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-map"></i>
                    <input type="text" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" placeholder="@lang('register.city_residence')" value="{{ old('city') }}" required>
                  </div>
                  @if ($errors->has('city'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('city') }}</strong>
                      </span>
                  @endif
                </div> 
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="@lang('register.password')" name="password" required>
                  </div>

                  <b style="color:red;display:none;" id="alert">@lang('register.password_control')</b>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" class="form-control" id="password-confirm" placeholder="@lang('register.password_confirmation')" name="password_confirmation">
                  </div>

                  <b style="color:red;display:none;" id="alert2">@lang('register.password_message')</b>
                </div> 

                <div class="checkbox">
                  <input type="checkbox" id="remember" OnClick="checkbox();" name="rememberme" value="forever"  style="float: left;">
                  <label for="remember">
                    <a href="{{route('terms')}}">@lang('register.remember_label')</a>
                  </label>
                </div>

                <input class="btn btn-common log-btn" id="submit" type="submit" value="@lang('register.register_button')" disabled="disabled"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 

    

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0s">
              <div class="widget">
                <h3 class="block-title">@lang('register.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('register.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('register.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('register.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('register.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('register.contact_menu')</a></li>
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
      
    <!-- Main JS  -->
    
  <script type="text/javascript" src="{{asset('/assets/assets/build/js/intlTelInput.js') }}"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
  var input = document.querySelector("#phone");
  output = document.querySelector("#output");
  var iti = window.intlTelInput(input, {
    separateDialCode: true,
    /*nationalMode: true,
    initialCountry: "auto",
       geoIpLookup: function(callback) {
        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
        });
      },*/
    utilsScript: "{{asset('/assets/assets/build/js/utils.js?1537727621611') }}" // just for formatting/placeholders etc
  });

  var handleChange = function() {
    var text = iti.getNumber();
    var textNode = document.createTextNode(text);
    output.innerHTML = "";
    output.appendChild(textNode);
    document.getElementById("output").value=text;
  };

  // listen to "keyup", but also "change" to update when the user selects a country
  input.addEventListener('change', handleChange);
  input.addEventListener('keyup', handleChange);
  
    
  </script>
  
  <script>
    function nbre(evt){
      var keyCode = evt.which ? evt.which : evt.keyCode;
      var interdit = 'abcdefghijklmnopqrstuvwxyzàâäãçéèêëìîïòôöõùûüñ &*?!:;,\t#~"^¨%$£?²¤§%*()[]{}<>|\\/`\'';
      if (interdit.indexOf(String.fromCharCode(keyCode)) >= 0) {
        return false;
        }
    }
  </script>

  <script type="text/javascript">
    var password=document.getElementById('password');
    var password2=document.getElementById('password-confirm');
    var alert=document.getElementById('alert');
    password.addEventListener("input",function() {
        if(password.value.length < 8 ||  !(/@|_|-|&|#/.test(password.value))) {
            //console.log(password.value);
            alert.style.display="inline-block";
        }else {
          alert.style.display="none";
        }
    });
    password2.addEventListener("input",function() {
        if(password2.value != password.value) {
            //console.log(password.value);
            alert2.style.display="inline-block";
        }else {
          alert2.style.display="none";
        }
    });
  </script>
  <script>
    function changeToLowerCase(t){
      var eleVal = document.getElementById(t.name);
      eleVal.value= eleVal.value.toLowerCase();
      
    }
    
    
  </script>


    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery-min.js') }}"></script>      
    <script type="text/javascript" src="{{asset('/assets/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/jasny-bootstrap.min.js') }}"></script>
    <script>
       function checkbox(){
              if(document.getElementById('remember').checked){
                  document.getElementById('submit').disabled = '';
              }
              else{
                  document.getElementById('submit').disabled = 'disabled';
              }
          }
    </script>

    
    
  </body>
</html>