
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="GrayGrids Team" name="author">
	<title>@lang('verifpackage.page_header') | {{config('app.name', 'Kharry')}}</title>
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
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand logo" href="{{ route('index') }}"><img alt="" src="/assets/assets/img/logo.jpg" style="width: 80px;height: : 80px;"></a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('verifpackage.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('verifpackage.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('verifpackage.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('verifpackage.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              	@else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('verifpackage.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('verifpackage.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('verifpackage.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('verifpackage.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('verifpackage.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('verifpackage.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('verifpackage.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('verifpackage.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('verifpackage.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('verifpackage.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('verifpackage.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('verifpackage.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('newpackage.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('newpackage.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('newpackage.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                        	<li><a href="{{ route('profils.index') }}"> @lang('verifpackage.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('verifpackage.logout_menu')
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
					<h2 class="title-2">@lang('verifpackage.page_title')</h2>
					@include('inc.messages')
					<form role="form" class="login-form"  method="POST" action="{!!  URL::to('paypal') !!}" id="payment-form">
							@csrf
							
							<div class="form-group">	
								<label class="control-label">@lang('verifpackage.package_weight')</label>
								<input class="form-control input-md" name="weight" type="number" id="nbre1" placeholder="Poids du colis(Kg)" value="{{$package->weight}}" onchange="kilo(this)" required autofocus>

								<input class="hidden" value="{{ Auth::user()->name }} {{ Auth::user()->firstname }}" name="sender_name">
								<input class="hidden" value="{{ Auth::user()->phone_number }}" name="sender_phone_number">
								<input class="hidden" value="{{$package->id}}" name="package_id">
								<input class="hidden" value="{{$package->trip_id}}" name="trip_id">	
								<input class="hidden" value="{{$package->user_id}}" name="package_userid">	
								<input class="hidden" value="{{$package->package_code}}" name="package_code">
								<input class="hidden" value="{{$currency}}" name="currency">	
                <input class="hidden" value="{{$total}}" id="amount" name="amount">
							</div>
								
							<div class="form-group">
								<label class="control-label" for="textarea">@lang('verifpackage.package_content')</label>
								<textarea class="form-control" id="textarea" name="content" value="" rows="4">{{$package->content}}</textarea>
							</div>
							
					
							<div class="form-group">
								
								<label class="control-label">@lang('verifpackage.sender_email')</label>
								<input class="form-control input-md" placeholder="jhon.deo@example.com" type="email" value="{{$package->sender_email}}" name="sender_email" required>
								
							</div>

							<div class="form-group">
								
								<label class="control-label">@lang('verifpackage.receiver_name')</label>
								<input class="form-control input-md" name="recipient_name" placeholder="Nom et Prénoms du destinataire" type="text" value="{{$package->recipient_name}}" required>
								
							</div>
							
							<div class="form-group">
								
								<label class="control-label">@lang('verifpackage.receiver_phonenumber')</label>
								<input class="form-control input-md" name="recipient_phone_number" placeholder="Numéro de téléphone du destinataire" type="text" value="{{$package->recipient_phone_number}}" required>
								
							</div>
							
							
							<div class="form-group ">
									<label class="control-label">@lang('verifpackage.receiver_email')</label>
									<input class="form-control input-md" placeholder="jhon.deo@example.com" name="recipient_email" type="email" value="{{$package->recipient_email}}" required> 
								
							</div>

							<div class="form-group ">
								<label class="control-label">@lang('verifpackage.amount')</label>
								<input class="form-control input-md"  type="text" value="{{$total}}" disabled="disabled"> 
								
							</div>
							
							<a href="{{ URL::to('packages/'.$package->id.'/edit') }}"><button class="btn btn-common" type="button"><i class="fa fa-edit"></i> @lang('verifpackage.edit_button')</button></a>
							<button class="btn btn-common" type="submit"><i class="fa fa-cc-paypal"></i> @lang('verifpackage.submit_button')</button>

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
                <h3 class="block-title">@lang('verifpackage.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('verifpackage.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('verifpackage.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('verifpackage.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('verifpackage.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('verifpackage.contact_menu')</a></li>
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
	<script type="text/javascript">
	  function kilo(evt){
	  var nbre1=document.getElementById('nbre1');
	    /*nbre1.addEventListener("input",function() {
	        if(nbre1.value < 10 ) {
	            nbre1.value=10;
	        }*/
	    if(nbre1.value < 1) {
	            //console.log(nbre1.value);
	            nbre1.value=1;
	        }

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
	<script src="{{asset('/assets/assets/js/main.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jquery.counterup.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/waypoints.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jasny-bootstrap.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/form-validator.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/contact-form-script.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/jquery.themepunch.tools.min.js') }}" type="text/javascript">
	  </script>
	<script src="{{asset('/assets/assets/js/bootstrap-select.min.js') }}">
	  </script>
	<script src="{{asset('/assets/assets/js/fileinput.js') }}">
	  </script>
</body>
</html>