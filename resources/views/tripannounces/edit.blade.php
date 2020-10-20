
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="GrayGrids Team" name="author">
	<title>@lang('edit_trip.edit_trip') | {{config('app.name', 'Kharry')}}</title>
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

    <!-- Autocomplete CSS Styles -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/autocomplete1.css') }}" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/places.js@1.16.4"></script>
</head>
<body style="background: #ffffff">

	<div class="header">
		
	<nav class="navbar navbar-default main-navigation" role="navigation">
		<div class="container">
			<div class="navbar-header">

				<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
					<span class="sr-only">Toggle navigation</span> 
					<span class="icon-bar"></span> <span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand logo" href="{{ route('index') }}"><img alt="" src="/assets/assets/img/logo.jpg" style="width: 80px;height: : 80px;"></a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
               @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('edit_trip.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('edit_trip.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('edit_trip.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('edit_trip.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('edit_trip.home_menu')</a></li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('edit_trip.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('edit_trip.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('edit_trip.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('edit_trip.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('edit_trip.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('edit_trip.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('edit_trip.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('edit_trip.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('edit_trip.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('edit_trip.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('edit_trip.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('edit_trip.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('edit_trip.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('edit_trip.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('profils.index') }}"> @lang('edit_trip.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('edit_trip.logout_menu')
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
					<h2 class="title-2">@lang('edit_trip.edit_trip')</h2>
					@include('inc.messages')
					<form role="form" class="login-form" method="POST" action="{{ route('tripannounces.update',$tripannounce->id) }}" enctype="multipart/form-data">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}

							<div class="form-group mb30 clearfix">
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label class="control-label">@lang('edit_trip.departure_city')</label>
											<input class="form-control" placeholder="@lang('announcetrip.place')" name="departure_city" id="city" type="search" value="{{$tripannounce->departure_city}}" required autofocus>
									</div>

									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<label class="control-label">@lang('edit_trip.arrival_city')</label>
											<input class="form-control" placeholder="@lang('announcetrip.place')" name="arrival_city" id="city1" type="search" value="{{$tripannounce->arrival_city}}" required>
									</div>

							</div>

							<div class="form-group mb30 clearfix">
								<div class="form-inline">
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label">@lang('edit_trip.departure_date')</label>
											<input class="form-control input-md" name="departure_date" value="{{$tripannounce->departure_date}}" placeholder="Enter Keyword" type="date" id="date1" onchange="setCorrect(this,'date1');" required>
										</div>
									</div>
									
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label">@lang('edit_trip.arrival_date')</label><input class="form-control input-md" name="arrival_date" value="{{$tripannounce->arrival_date}}" placeholder="Enter Keyword" type="date" id="date2" onchange="setCorrect(this,'date2');" required>
										</div>
									</div>
									
								</div>
							</div>

							<div class="form-group mb30 clearfix">
								<div class="form-inline">
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label">@lang('edit_trip.number_kilo')</label><input class="form-control input-md" value="{{$tripannounce->number_kilo}}" name="number_kilo" id="nbre" type="number" required autofocus> 
										</div>
									</div>
									
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label"><i class="fa fa-money"></i> @lang('edit_trip.price_kilo')</label>
											<input class="form-control input-md" name="price_kilo" value="{{$tripannounce->price_kilo}}" id="nbre1" placeholder="10" type="text" onchange="kilo(this);" required>
										</div>
									</div>
									
								</div>
							</div>

							<div class="form-group mb30 clearfix">
								<div class="form-inline">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label"> @lang('edit_trip.currency')</label>
												<select class="form-control" name="currency">
													<option value="{{$tripannounce->currency}}">{{$tripannounce->currency}}</option>
													 <option value="USD">USD</option>
													 <option value="CAD">CAD</option>
													 <option value="EUR">EUR</option>
												</select>
										</div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
									
										<div class="input-group">
											<label class="control-label"> @lang('edit_trip.type_travel')</label>
												<select class="form-control" name="transport">
													<option value="{{$tripannounce->transport}}">{{$tripannounce->transport}}</option>
													<option value="Avion"><i class="fa fa-plane"></i> Avion </option>
													<option value="Conteneur">Conteneur </option>
													<option value="Train">Train </option>
													<option value="Voiture">Voiture </option>
												</select>
										</div>
										
									</div>
									
								</div>
							</div>

							<div class="form-group mb30 clearfix">
								<div class="form-inline">
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label class="control-label">@lang('edit_trip.paypal_account')</label>
											@if(preg_match('#@#',$tripannounce->paypal_info))
												<input class="form-control input-md" style="display:block;" name="paypal_info" id="inputCompteEmail" placeholder="Email du compte paypal" type="email" value="{{$tripannounce->paypal_info}}">
											@else
												<input class="form-control input-md" name="paypal_info" id="inputCompteNum" placeholder="Numéro de téléphone du compte paypal" type="text" value="{{$tripannounce->paypal_info}}">

											@endif	
												
										</div>
									</div>

								</div>
							</div>

							<div class="form-group mb30 clearfix">
								<div class="form-inline">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="radio" id="num_telT" {{preg_match('#@#',$tripannounce->paypal_info)?'checked':''}}  name="optionsRadios" onclick="changePaypal();" style="width: 5%; height: 20px;"> <label>@lang('edit_trip.phone_number')</label>
									</div>

									<div class=" col-md-6 col-sm-6 col-xs-12">
										<input type="radio" id="emailT" {{preg_match('#@#',$tripannounce->paypal_info)?'checked':''}} name="optionsRadios" onclick="changePaypal();" style="width: 5%; height: 20px;"> <label>@lang('edit_trip.email')</label>
									</div>
								</div>
							</div>
							
								

							
								<button class="btn btn-common" type="reset">@lang('edit_trip.cancel_button')</button>
								<button class="btn btn-common" type="submit">@lang('edit_trip.edit_button')</button>
							

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
                <h3 class="block-title">@lang('edit_trip.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('edit_trip.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('edit_trip.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('edit_trip.home_menu')</a></li>
                  <li><a href="{{route('faq')}}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('edit_trip.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('edit_trip.contact_menu')</a></li>
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



		function changePaypal(){
      		if(document.getElementById('num_telT').checked){
      			document.getElementById('inputCompteNum').style.display =  'block';
      			document.getElementById('inputCompteEmail').style.display =  'none';
      			
      		} else {
      			document.getElementById('inputCompteNum').style.display =  'none';
      			document.getElementById('inputCompteEmail').style.display =  'block';
      			

      		}
    	}
	</script>

	<script type="text/javascript">
	var nbre=document.getElementById('nbre');
		nbre.addEventListener("input",function() {
				if(nbre.value < 0 ) {
						nbre.value=0;
				}
		});
	</script>

	<script type="text/javascript">
	function kilo(evt){
	var nbre1=document.getElementById('nbre1');
		/*nbre1.addEventListener("input",function() {
				if(nbre1.value < 10 ) {
						nbre1.value=10;
				}*/
		if(nbre1.value < 5) {
            //console.log(nbre1.value);
            nbre1.value=5;
        }

	}
	</script>

	<script type="text/javascript">
    function nbre(evt){
      var keyCode = evt.which ? evt.which : evt.keyCode;
      var interdit = 'abcdefghijklmnopqrstuvwxyzàâäãçéèêëìîïòôöõùûüñ &*?!:;,\t#~"^¨%$£?²¤§%*()[]{}<>|\\/`\'';
      if (interdit.indexOf(String.fromCharCode(keyCode)) >= 0) {
        return false;
        }
    }
  </script>
		
		
	<script>
		function activatePlacesSearch(){
			var input = document.getElementById('search_term');
			var input1 = document.getElementById('search_term1');
			var autocomplete = new google.maps.places.Autocomplete(input);
			var autocomplete = new google.maps.places.Autocomplete(input1);
		}
	</script>
	<script language="javascript">
//function to convert enterd date to any format
function setCorrect(xObj,xTarget){
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
				document.getElementById(xTarget).value=yeard+"-"+monthd+"-0"+dayd;
			}else {
				document.getElementById(xTarget).value=yeard+"-"+monthd+"-"+dayd;
			}
	}else if(year=yeard) {
		if(month<monthd){
		console.log("modif2");
		if (dayd<10) {
			document.getElementById(xTarget).value=yeard+"-"+monthd+"-0"+dayd;
		}else {
			document.getElementById(xTarget).value=yeard+"-"+monthd+"-"+dayd;
		}
		}else if(month==monthd) {
			if(day<dayd){
				console.log("modif3");
				if (dayd<10) {
					document.getElementById(xTarget).value=yeard+"-"+monthd+"-0"+dayd;
				}else {
					document.getElementById(xTarget).value=yeard+"-"+monthd+"-"+dayd;
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