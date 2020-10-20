
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="GrayGrids Team" name="author">
	<title>@lang('receivepackage.receivepackage_menu') | {{config('app.name', 'Kharry')}}</title>
	<!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
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
				<a class="navbar-brand logo" href="{{ route('index') }}"><img alt="" src="/assets/assets/img/logo.jpg" style="width: 80px;height: 80px;"></a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
	              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('receivepackage.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('receivepackage.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('receivepackage.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('receivepackage.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('receivepackage.home_menu')</a></li>
                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('receivepackage.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('receivepackage.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('receivepackage.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('receivepackage.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('receivepackage.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('receivepackage.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('receivepackage.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('receivepackage.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('receivepackage.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('receivepackage.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('receivepackage.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('receivepackage.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('receivepackage.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('receivepackage.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('receivepackage.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('receivepackage.logout_menu')
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
				<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div class="page-ads box">
					<h2 class="title-2">@lang('receivepackage.receivepackage_menu')</h2>
					@include('inc.messages')
					<form role="form" class="login-form"  method="POST" action="{{ route('receivepackage') }}">
							@csrf
							
							<div class="form-group">	
								<label class="control-label">@lang('receivepackage.package_code')</label>
								<input class="form-control input-md" name="package_code" type="text" placeholder="00000000000" required autofocus>
							</div>

							<div class="form-group">
								
								<label class="control-label">@lang('receivepackage.receiver_name')</label>
								<input class="form-control input-md" name="recipient_name" value="{{ Auth::user()->name }} {{ Auth::user()->firstname }}" placeholder="Nom et Prénoms du destinataire" type="text" required>
							</div>
							
							<button class="btn btn-common" type="reset">@lang('receivepackage.cancel_button')</button>
							<button class="btn btn-common" type="submit">@lang('receivepackage.submit_button')</button>

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
                <h3 class="block-title">@lang('receivepackage.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('receivepackage.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('receivepackage.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('receivepackage.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('receivepackage.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('receivepackage.contact_menu')</a></li>
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
	<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a> 

  <script>
    function changeToUpperCase(t){
      var eleVal = document.getElementById('question');
      var eleVal1 = document.getElementById('answer');
      eleVal.value= eleVal.value.toUpperCase();
      eleVal1.value= eleVal1.value.toUpperCase();
      
    }
  </script>
	
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
	<script src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}" type="text/javascript">
	  </script>
	
</body>
</html>