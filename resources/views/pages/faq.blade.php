
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>FAQ | {{config('app.name', 'Kharry')}} </title>

     <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css') }}" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/material-kit.css') }}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/font-awesome.min.css') }}" type="text/css">
        <!-- Line Icons CSS -->
    <link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/main.css') }}" type="text/css">
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


  </head>
<body>

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
            <a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{asset('/assets/assets/img/logo.jpg') }}" alt="" style="width: 80px;height: : 80px;"></a>
          </div>
          <!-- brand and toggle menu for mobile End -->

          <!-- Navbar Start -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('faq.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('faq.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('faq.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('faq.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('faq.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-faq"></i> @lang('faq.faq_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('faq.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('faq.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('faq.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('faq.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('faq.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('faq.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('faq.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('faq.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('faq.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('faq.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('faq.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('faq.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('faq.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('faq.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('faq.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('faq.logout_menu')
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


<div class="page-header" style="background: url(/assets/assets/img/banner1.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-wrapper">
					<h2 class="page-title">FAQ</h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="head-faq text-center">
					<h2 class="section-title">@lang('faq.section_title')</h2>
				</div>

				<div class="ad-detail-content">
	              	<p>
		              	@lang('faq.intro')
		                <blockquote><h4>@lang('faq.blockquote1')</h4></blockquote>
	            	</p>
	            </div>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				@lang('faq.step1')
			</a>
			</h4>


		</div>
		<div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">
				<p>@lang('faq.description1') </p>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					@lang('faq.step2')
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<p>
					@lang('faq.description2')
				</p>
			</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					@lang('faq.step3')
				</a>
			</h4>
		</div>
	<div id="collapseThree" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				@lang('faq.description3')
			</p>
		</div>
	</div>
</div>

<div class="ad-detail-content">
  	<p>
        <blockquote><h4>@lang('faq.blockquote2')</h4></blockquote>
	</p>
</div>


<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
				@lang('faq.step4')
			</a>
		</h4>
	</div>
	<div id="collapseFour" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				@lang('faq.description4')
			</p>
		</div>
	</div>
</div>


<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
				@lang('faq.step5')
			</a>
		</h4>
	</div>
	<div id="collapseFive" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				@lang('faq.description5')
			</p>
		</div>
	</div>
</div>


	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
					@lang('faq.step6')
				</a>
			</h4>
		</div>
	<div id="collapseSix" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				@lang('faq.description6')
			</p>
		</div>
	</div>
	</div>
</div>

			</div>
		</div>
	</div>
</div>


		<footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0s">
              <div class="widget">
                <h3 class="block-title">@lang('faq.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('faq.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('faq.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('faq.home_menu')</a></li>
                  <li><a href="{{ route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('faq.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('faq.contact_menu')</a></li>
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
  <script src="{{asset('/assets/assets/js/bootstrap-select.min.js') }}"></script>
</body>
</html>