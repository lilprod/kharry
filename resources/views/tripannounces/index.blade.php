
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="GrayGrids Team">
	<title>@lang('mytrips.mytrips_menu') | {{config('app.name', 'Kharry')}}</title>

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
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('mytrips.home_menu')</a></li>
              <li><a href="{{ route('tripannounces.create') }}"><i class="lnr lnr-car"></i> @lang('mytrips.tripannounce_menu')</a></li>
              <!--<li><a href="{{ route('receivepackage') }}"><i class="lnr lnr-book"></i> @lang('home.receivepackage_menu')</a></li>-->
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>@lang('mytrips.login_menu')</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>@lang('mytrips.register_menu')</a>
                      @endif
                  </li>
                  <li><a href="{{ URL::to('locale/en') }}"><img src="{{asset('/assets/assets/img/us.png') }}" alt="" style="width: 15px;height:10px;"> English</a></li>
                  <li><a href="{{ URL::to('locale/fr') }}"><img src="{{asset('/assets/assets/img/fr.jpg') }}" alt="" style="width: 15px;height:10px;"> Français</a></li>
              @else
                  <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> @lang('mytrips.home_menu')</a></li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('mytrips.trips_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('tripannounces.create') }}"> @lang('mytrips.tripannounce_menu')</a></li>
                        <li><a href="{{ route('tripannounces.index') }}"> @lang('mytrips.mytrips_menu')</a></li>
                        <li><a href="{{ route('index') }}"> @lang('mytrips.searchtrip_menu')</a></li>
                        
                      </ul>
                  </li>

                  

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('mytrips.mypackages_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('pendingpackage') }}">@lang('mytrips.pendingpackage_menu')</a></li>
                        <li><a href="{{ route('packages.index') }}">@lang('mytrips.packagesent_menu')</a></li>
                        <li><a href="{{ route('packagedelivered') }}">@lang('mytrips.deliveredpackage_menu')</a></li>
                        <li><a href="{{ route('packagereceived') }}">@lang('mytrips.packagereceived_menu')</a></li>
                        <li><a href="{{ route('receivepackage') }}">@lang('mytrips.receivepackage_menu')</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true">@lang('mytrips.payments_menu')<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">@lang('mytrips.myexpenses_menu')</a></li>
                        <li><a href="#">@lang('mytrips.myearnings_menu')</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('forum.index') }}"> @lang('mytrips.forum_menu')</a></li>
                  
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                        	<li><a href="{{ route('profils.index') }}"> @lang('mytrips.myaccount_menu')</a></li>
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('mytrips.logout_menu')
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



<div id="content">
<div class="container">
<div class="row">
<div class="col-sm-3 page-sideabr">
<aside>
<div class="inner-box">
	<div class="user-panel-sidebar">
		<div class="collapse-box">
			<h5 class="collapset-title no-border">@lang('mytrips.collapset_title')<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myclassified"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myclassified" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
						<a href="{{ route('profils.index') }}"><i class="fa fa-home"></i> @lang('mytrips.myaccount_menu')</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="collapse-box">
				<h5 class="collapset-title">MENU<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myads" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
						<a href="{{ route('tripannounces.index') }}"><i class="fa fa-car"></i> @lang('mytrips.mytrips_menu')
					</li>

					<li>
						<a href="{{ route('index') }}"><i class="fa fa-search-plus"></i> @lang('mytrips.searchtrip_menu')</a>
					</li>

					<li>
						<a href="{{ route('tripannounces.create') }}"><i class="fa fa-star-o"></i> @lang('mytrips.tripannounce_menu')</a>
					</li>
					
					<li>
						<a href="{{ route('pendingpackage') }}"><i class="fa fa-spinner"></i> @lang('mytrips.pendingpackage_menu')</a>
					</li>

                    <li>
                     	<a href="{{ route('packages.index') }}"><i class="fa fa-envelope"></i> @lang('mytrips.packagesent_menu')</a>
                    </li>

                    <li>
		            	<a href="{{ route('packagereceived') }}"><i class="fa fa-inbox"></i> @lang('mytrips.packagereceived_menu')</a>
		           </li>

                    <li>
                     	<a href="{{ route('packagedelivered') }}"><i class="fa fa-suitcase"></i> @lang('mytrips.deliveredpackage_menu')</a>
                    </li>

                    <li>
                    	<a href="{{ route('receivepackage') }}"><i class="fa fa-user"></i> @lang('mytrips.receivepackage_menu')</a>
                    </li>
					
					<li>
						<a href="{{ route('payments') }}"><i class="fa fa-money"></i> @lang('mytrips.myexpenses_menu')</a>
					</li>
					
				</ul>
			</div>
		</div>

	</div>
</div>
<div class="inner-box">
<div class="widget-title">
	<h4>@lang('mytrips.advertisement_label')</h4>
	</div>
	<img src="assets/assets/img/img1.jpg" alt="">
</div>
</aside>
</div>
<div class="col-sm-9 page-content">
	@include('inc.messages')
	<div class="inner-box">
		<h2 class="title-2"><i class="fa fa-car"></i> @lang('mytrips.mytrips_menu')</h2>
		
	<div class="table-responsive">
		<div class="table-action">
			<div class="checkbox">
				<label for="checkAll">
					
						@lang('mytrips.new_label') | <a href="{{ route('tripannounces.create') }}" class="btn btn-xs btn-danger"><i class="fa fa-plus"></i> @lang('mytrips.tripannounce_menu') </a>
				</label>
			</div>
			
		</div>
			<table class="table table-striped table-bordered add-manage-table">
			<thead>
			<tr>
				
				<th> @lang('mytrips.trip_details')</th>
				<th>@lang('mytrips.number_kilo')</th>
				<th>@lang('mytrips.price_kilo')</th>
				<th>@lang('mytrips.options')</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($tripannounces as $tripannounce)
				<tr>
					
					
					<td class="ads-details-td">
						<p> <strong> @lang('mytrips.departure_city') </strong>:
							{{ $tripannounce->departure_city }} </p>

						<p> <strong> @lang('mytrips.arrival_city') </strong>:
						{{ $tripannounce->arrival_city }} </p>

						<p> <strong> @lang('mytrips.departure_date') </strong>:
							{{ $tripannounce->departure_date }} </p>

						<p> <strong> @lang('mytrips.arrival_date') </strong>:
							{{ $tripannounce->arrival_date }} </p>

						<p> <strong>@lang('mytrips.transport') </strong>: {{ $tripannounce->transport }} </p>
					</td>
					

					<td class="price-td">
						<strong>  {{ $tripannounce->number_kilo }}</strong>
					</td>

					<td class="price-td">
						<strong>  {{ $tripannounce->price_kilo }} {{ $tripannounce->currency }}</strong>
					</td>

					<td class="action-td">
						<p><a href="{{ URL::to('tripannounces/'.$tripannounce->id.'/edit') }}" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> @lang('mytrips.edit_button')</a></p>

						<p> {!! Form::open(['method' => 'DELETE', 'route' => ['tripannounces.destroy', $tripannounce->id] ]) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>'.' '. trans('mytrips.delete_button'), ['type' => 'submit', 'class' => 'btn btn-danger btn-xs'] )  }}
                        {!! Form::close() !!}</p>
					</td>
				</tr>
				@endforeach
				

				
			</tbody>
			</table>
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
                <h3 class="block-title">@lang('mytrips.about_menu')</h3>
                <div class="textwidget">
                  <p>@lang('mytrips.text')</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">@lang('mytrips.block_title')</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">@lang('mytrips.home_menu')</a></li>
                  <li><a href="{{ route('faq') }}">FAQ</a></li>
                  <li><a href="{{ route('about')}}">@lang('mytrips.about_menu')</a></li>
                  <li><a href="{{ route('contact')}}">@lang('mytrips.contact_menu')</a></li>
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
</body>
</html>