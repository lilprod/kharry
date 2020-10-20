
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="GrayGrids Team" name="author">
	<title>Page not found - 404 | {{config('app.name', 'Kharry')}}</title>
	<!-- Favicon -->
    <link rel="shortcut icon" href="/assets/assets/img/favicon.png">
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

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<div class="header">
		
	<nav class="navbar navbar-default main-navigation" role="navigation">
		<div class="container">
			<div class="navbar-header">

				<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> <span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{asset('/assets/assets/img/logo.jpg') }}" alt="" style="width: 80px;height: : 80px;"></a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('announcetrip.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('announcetrip.tripannounce_menu')</a></li>
              <li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('announcetrip.receivepackage_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('announcetrip.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('announcetrip.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('announcetrip.home_menu')</a></li>
                  <li><a href="{{ route('profils.index') }}"> @lang('announcetrip.myaccount_menu')</a></li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('announcetrip.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('announcetrip.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('announcetrip.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('announcetrip.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('announcetrip.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('packages.index') }}">@lang('announcetrip.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packageReceived') }}">@lang('announcetrip.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('announcetrip.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('announcetrip.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('announcetrip.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('announcetrip.myearnings_menu')</a></li>
                      </ul>
                  </li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('announcetrip.logout_menu')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                        </ul>
                    </li>

                    <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                    <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>

                    <li class="postadd">
                      <a class="btn btn-danger btn-post" href="{{ route('dashboard') }}"><span class="fa fa-dashboard"></span> Dashboard</a>
                    </li>
              @endguest
            </ul>
			</div>
		</div>
	</nav>
		
	</div>
	

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div class="page-ads box">
					<h2 class="title-2"><center>404<br></center></h2>
        			<p><center>The page you're looking for is not available</center></p>
					
				
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
                <h3 class="block-title">@lang('announcetrip.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('announcetrip.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('announcetrip.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('announcetrip.home_menu')</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('announcetrip.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('announcetrip.contact_menu')</a></li>
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
                <a class="instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
	<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a> 
	

	<script src="{{asset('/assets/assets/js/jquery-min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/bootstrap.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/material.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/material-kit.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jquery.parallax.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/owl.carousel.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/wow.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/main.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/waypoints.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jasny-bootstrap.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/bootstrap-select.min.js') }}">
	  </script>

</body>
</html>