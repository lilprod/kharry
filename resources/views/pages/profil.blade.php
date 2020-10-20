
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="GrayGrids Team">
	<title>@lang('register.myaccount_menu') | {{config('app.name', 'Kharry')}}</title>

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('/assets/assets/css/jasny-bootstrap.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('/assets/assets/css/jasny-bootstrap.min.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/material-kit.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('/assets/assets/fonts/line-icons/line-icons.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/main.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/extras/animate.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.carousel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('/assets/assets/extras/owl.theme.css') }}" type="text/css">
	<link rel="stylesheet" href="{{asset('/assets/assets/extras/settings.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/responsive.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/css/bootstrap-select.min.css') }}">

	<!-- Autocomplete CSS Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/autocomplete1.css') }}" type="text/css">

	<link rel="stylesheet" href="{{asset('/assets/assets/build/css/intlTelInput.css') }}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4"></script>

</head>
<body style="background: #ffffff">

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

				<a class="navbar-brand logo" href="{{ route('index') }}"><img src="{{asset('/assets/assets/img/logo.jpg') }}" alt="" style="width: 80px;height: 80px;"></a>
			</div>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="nav navbar-nav navbar-right">
		      @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('myaccount.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('myaccount.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li><a href="{{ route('forum.index') }}"><i class="lnr lnr-users"></i>@lang('myaccount.forum_menu')</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('myaccount.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('myaccount.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('myaccount.home_menu')</a></li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('myaccount.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('myaccount.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('myaccount.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('myaccount.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('myaccount.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('myaccount.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('myaccount.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('myaccount.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('myaccount.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('myaccount.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('myaccount.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('myaccount.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('myaccount.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('myaccount.forum_menu')</a></li>
                  
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

		</div>
	</nav>

</div>


<div id="content">
<div class="container">
<div class="row">
<div class="col-sm-3 page-sideabr">
<aside>
	<div class="inner-box">
		<div class="user-panel-sidebar">
		<div class="collapse-box">
			<h5 class="collapset-title no-border">@lang('myaccount.collapset_title')<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myclassified"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myclassified" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
						<a href="{{ route('profils.index') }}"><i class="fa fa-home"></i> @lang('myaccount.myaccount_menu')</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="collapse-box">
				<h5 class="collapset-title">MENU<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myads" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
            <a href="{{ route('tripannounces.index') }}"><i class="fa fa-car"></i> @lang('myaccount.mytrips_menu')
          </li>

          <li>
            <a href="{{ route('index') }}"><i class="fa fa-search-plus"></i> @lang('myaccount.searchtrip_menu')</a>
          </li>

          <li>
            <a href="{{ route('tripannounces.create') }}"><i class="fa fa-star-o"></i> @lang('myaccount.tripannounce_menu')</a>
          </li>
          
          <li>
            <a href="{{ route('pendingpackage') }}"><i class="fa fa-spinner"></i> @lang('myaccount.pendingpackage_menu')</a>
          </li>

          <li>
            <a href="{{ route('packages.index') }}"><i class="fa fa-envelope"></i> @lang('myaccount.packagesent_menu')</a>
          </li>

          <li>
            <a href="{{ route('packagedelivered') }}"><i class="fa fa-suitcase"></i> @lang('myaccount.deliveredpackage_menu')</a>
          </li>

          <li>
            <a href="{{ route('receivepackage') }}"><i class="fa fa-user"></i> 
            @lang('myaccount.receivepackage_menu')</a>
          </li>
          
          <li>
            <a href="{{ route('payments') }}"><i class="fa fa-money"></i> 
            @lang('myaccount.myexpenses_menu')</a>
          </li>
					
				</ul>
			</div>
		</div>

	</div>
	</div>
		<div class="inner-box">
			<div class="widget-title">
				<h4>@lang('myaccount.advertisement_label')</h4>
			</div>
			<img src="assets/assets/img/img1.jpg" alt="">
		</div>
</aside>
</div>
<div class="col-sm-9 page-content">
	
<div class="inner-box">
	<div class="welcome-msg">
		<h3 class="page-sub-header2 clearfix no-padding">@lang('myaccount.sub_header') {{ Auth::user()->name }} {{ Auth::user()->firstname }}</h3>

		@include('inc.messages')
		
	</div>
<div id="accordion" class="panel-group">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> @lang('myaccount.top_label') </a> </h4>
		</div>
		<div class="panel-collapse collapse in" id="collapseB1">
			<div class="panel-body">
				<form role="form" method="POST" action="{{ route('profils.store') }}">
					@csrf
					
					<div class="form-group">
						<label class="control-label">@lang('myaccount.name')</label>
						<input class="form-control" name="name" type="text" id="name" value="{{ Auth::user()->name }}">
					</div>

					<div class="form-group">
						<label class="control-label">@lang('myaccount.firstname')</label>
						<input class="form-control" type="text" value="{{ Auth::user()->firstname }}" name="firstname">
					</div>

					<div class="form-group">
						<label class="control-label">@lang('myaccount.email_address')</label>
						<input class="form-control" type="email" value="{{ Auth::user()->email }}" name="email">
					</div>

					<div class="form-group">
						<label for="Phone" class="control-label">@lang('myaccount.phone_number')</label>
						<input class="form-control" id="phone" type="text" value="{{ Auth::user()->phone_number }}" name="phone_number" onkeypress="return nbre(event)">
					</div>

					<div class="form-group">
						<label class="control-label">@lang('myaccount.city_residence')</label>
								<input class="form-control" placeholder="@lang('myaccount.city_residence')" name="city" value="{{ Auth::user()->city }}"  type="search" id="city" required>
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-common">@lang('myaccount.edit_button')</button>
					</div>
				</form>

			</div>

		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB2" data-toggle="collapse"> @lang('myaccount.panel_title') </a> </h4>
		</div>
		<div style="height: 0px;" aria-expanded="false" class="panel-collapse collapse" id="collapseB2">
			<div class="panel-body">
				<form role="form" method="POST" action="{{route('updatepassword')}}">
					@csrf
					<div class="form-group">
						<label class="control-label">@lang('myaccount.new_password')</label>
						<input class="form-control" id="password" name="password" placeholder="" type="password">

						<b style="color:red;display:none;" id="alert">@lang('myaccount.password_control'))</b>

					</div>

					<div class="form-group">
						<label class="control-label">@lang('myaccount.password_confirmation')</label>
						<input class="form-control" id="password-confirm" placeholder="" type="password" name="password_confirmation">

						<b style="color:red;display:none;" id="alert2">@lang('myaccount.password_message')</b>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-common">@lang('myaccount.edit_button')</button>
					</div>
				</form>
			  </div>
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
                <h3 class="block-title">@lang('myaccount.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('myaccount.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('myaccount.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('myaccount.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('myaccount.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('myaccount.contact_menu')</a></li>
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
                <a class="instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                
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

	<script>
    function nbre(evt){
      var keyCode = evt.which ? evt.which : evt.keyCode;
      var interdit = 'abcdefghijklmnopqrstuvwxyzàâäãçéèêëìîïòôöõùûüñ &*?!:;,\t#~"^¨%$£?²¤§%*()[]{}<>|\\/`\'';
      if (interdit.indexOf(String.fromCharCode(keyCode)) >= 0) {
        return false;
        }
    }
  </script>

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
      });;
    })();
  </script>

  <script>
    function changeToUpperCase(t){
      var eleVal = document.getElementById(t.name);
      eleVal.value= eleVal.value.toUpperCase(); 
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