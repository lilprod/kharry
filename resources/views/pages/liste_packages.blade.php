
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="GrayGrids Team">
	<title>Mes Colis | {{config('app.name', 'Kharry')}}</title>

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

					<a class="navbar-brand logo" href="index.html"><img src="assets/assets/img/logo.jpg" alt=""></a>
			</div>


			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav navbar-right">
              @guest
              <li><a href="{{ route('index') }}"><i class="lnr lnr-home"></i> Accueil</a></li>
              <li><a href="#"><i class="lnr lnr-car"></i> Annoncer Voyage</a></li>
              <li class="">
                      <a class="" href="{{ route('login') }}"><i class="lnr lnr-enter"></i>{{ __('Login') }}</a>
                  </li>
                  <li class="">
                      @if (Route::has('register'))
                          <a class="" href="{{ route('register') }}"><i class="lnr lnr-user"></i>{{ __('Register') }}</a>
                      @endif
                  </li>
              @else
                  <li><a href="{{ route('profil') }}"> Mon Compte</a></li>
                  <li><a href="{{ route('tripannounces.index') }}">Mes Voyages</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true"></i>Mes Colis<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('packages.index') }}">Colis livrés</a></li>
                        <li><a href="#">Colis reçus</a></li>
                      </ul>
                  </li>

                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="true"></i>Portefeuille<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('payments') }}">Mes dépenses</a></li>
                        <li><a href="#">Mes gains</a></li>
                      </ul>
                  </li>

                  <li><a href="{{ route('tripannounces.create') }}"></i> Annoncer Voyage</a></li>
                  <li><a href="{{ route('index') }}"></i> Rechercher</a></li>
                  <li class="dropdown">
                        <a class="dropdown-toggle" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                        </ul>
                    </li>
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
			<h5 class="collapset-title no-border">My Dashboard<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myclassified"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myclassified" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
						<a href="account-home.html"><i class="fa fa-home"></i> Personal Home</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="collapse-box">
				<h5 class="collapset-title">MENU<a aria-expanded="true" class="pull-right" data-toggle="collapse" href="#myads"><i class="fa fa-angle-down"></i></a></h5>
			<div aria-expanded="true" id="myads" class="panel-collapse collapse in">
				<ul class="acc-list">
					<li>
						<a href="{{ route('tripannounces.index') }}"><i class="fa fa-credit-card"></i> Mes Voyages <span class="badge">44</span></a>
					</li>
					<li>
						<a href="{{ route('packages.index') }}"><i class="fa fa-heart-o"></i> Mes Colis <span class="badge">19</span></a>
					</li>
					<li>
						<a href="{{ route('tripannounces.create') }}"><i class="fa fa-star-o"></i> Annoncer Voyage</a>
					</li>
					<li>
						<a href="{{ route('index') }}"><i class="fa fa-folder-o"></i> Rechercher Voyage</a>
					</li>
					
				</ul>
			</div>
		</div>

	</div>
</div>
<div class="inner-box">
<div class="widget-title">
	<h4>Advertisement</h4>
	</div>
	<img src="assets/assets/img/img1.jpg" alt="">
</div>
</aside>
</div>
<div class="col-sm-9 page-content">
	@include('inc.messages')
	<div class="inner-box">
		<h2 class="title-2"><i class="fa fa-heart-o"></i> Mes Colis</h2>
		
	<div class="table-responsive">
		<div class="table-action">
			<div class="checkbox">
				<label for="checkAll">
					<input id="checkAll" type="checkbox">
						Select: All | <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-plus"></i> Rechercher un Voyage </a>
				</label>
			</div>
			<div class="table-search pull-right col-xs-7">
				<div class="form-group">
					<label class="col-xs-5 control-label text-right">Search <br>
					<a title="clear filter" class="clear-filter" href="#clear">[clear]</a>
					</label>
					<div class="col-xs-7 searchpan">
					<input class="form-control" id="filter" type="text">
					</div>
				</div>
			</div>
		</div>
			<table class="table table-striped table-bordered add-manage-table">
			<thead>
			<tr>
				<th data-type="numeric"></th>
				<th>Packages Details</th>
				<th>Recipient Email</th>
				<th>Status</th>
				<th>Option</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($packages as $package)
				<tr>
					<td class="add-img-selector">
						<div class="checkbox">
							<label>
								<input type="checkbox">
							</label>
						</div>
					</td>
					
					<td class="ads-details-td">
						<p> <strong> Poids du Colis </strong>:
							{{ $package->weight }} </p>

						<p> <strong> Contenu du colis </strong>:
						{{ $package->content }} </p>

						
					</td>
					

					<td class="price-td">
						<strong>  {{ $package->recipient_email }}</strong>
					</td>

					<td class="price-td">
						<strong>  {{ $package->status }}</strong>
					</td>

					<td class="action-td">
						<p><a href="#" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Edit</a></p>

						<p> <a class="btn btn-danger btn-xs"> <i class=" fa fa-trash"></i> Delete </a></p>
						
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
                <h3 class="block-title">A Propos de Nous</h3>
                <div class="textwidget">
                  <p>Kharry est une plateforme qui met en contact toutes personnes désirant envoyer un
                    bien rapidement à une destination choisie et tous voyageurs qui cherchent à se faire un
                    peu de l argent moyennant un transport de (colis valises…) selon leurs moyens de
                    déplacement.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5s">
              <div class="widget">
                <h3 class="block-title">Liens Utiles</h3>
                <ul class="menu">
                  <li><a href="{{ route('index')}}">Home</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="{{ route('about')}}">About</a></li>
                  <li><a href="{{ route('contact')}}">Contact</a></li>
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
                <p>© Copyright 2018 - Kharry. Tous droits reservés. - Designed by <a rel="nofollow" href="#">SPARK CORPORATION</a></p>
              </div>              
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
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
	<script src="{{asset('/assets/assets/js/bootstrap-select.min.js"></script>
</body>
</html>