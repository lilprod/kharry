
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="GrayGrids Team">
    <title>@lang('reset.page_title') | {{config('app.name', 'Kharry')}}</title>

    <link rel="shortcut icon" href="assets/assets/img/favicon.png">

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

                <a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{asset('/assets/assets/img/logo.jpg') }}" alt="" style="width: 80px;height: : 80px;"></a>
            </div>


            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('reset.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('reset.tripannounce_menu')</a></li>
              <li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('reset.receivepackage_menu')</a></li>
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('reset.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('reset.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('reset.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('reset.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('reset.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('reset.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('reset.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('reset.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('reset.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('reset.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('reset.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('reset.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('reset.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('reset.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('reset.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('reset.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('reset.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('reset.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('reset.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('reset.logout_menu')
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




<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
                <div class="page-login-form box">
                    <h3>
                        @lang('reset.page_title')
                    </h3>
                    <form role="form" class="login-form" method="POST" action="{{ route('password.update') }}">
                    
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <div class="input-icon">
                                <i class="icon fa fa-envelope"></i>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="@lang('reset.email')" required autofocus>
                            </div>
                            
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                          <div class="input-icon">
                            <i class="icon fa fa-unlock-alt"></i>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="@lang('reset.password')" name="password" required>
                          </div>

                          <b style="color:red;display:none;" id="alert">@lang('reset.password_control')</b>
                          
                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>
                        
                        <div class="form-group">
                          <div class="input-icon">
                            <i class="icon fa fa-unlock-alt"></i>
                            <input type="password" class="form-control" id="password-confirm" placeholder="@lang('reset.confirm_password')" name="password_confirmation">
                          </div>

                          <b style="color:red;display:none;" id="alert2">@lang('reset.password_message')</b>

                        </div>
                        
                        <button class="btn btn-common log-btn" type="submit">
                            @lang('reset.submit_button')
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0s">
              <div class="widget">
                <h3 class="block-title">@lang('reset.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('reset.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('reset.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('reset.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('reset.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('reset.contact_menu')</a></li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                    <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a>
                    </li>
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
                <p>© Copyright 2019 - Kharry. Tous droits reservés. - Designed by <a rel="nofollow" href="#">SPARK CORPORATION</a></p>
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

    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/material.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/material-kit.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.parallax.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{asset('/assets/assets/js/bootstrap-select.min.js') }}"></script>
</body>
</html>