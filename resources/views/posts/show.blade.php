<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/material-kit.css') }}">
</head>

<body class="blog-post">

	<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
			</div>
			@auth
			<div class="collapse navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
                    <li>
						<a href="{{ route('home') }}">
							<i class="material-icons">dashboard</i> DASHBOARD
						</a>
					</li>
    				<li>
						<a href="{{ route('create_post_path') }}">
							<i class="material-icons">note_add</i> NUEVO POST
						</a>
					</li>

					<li>
						<a href="{{ route('logout') }}" class="btn btn-white btn-simple" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<i class="material-icons">exit_to_app</i> CERRAR SESIÓN
						</a>
					</li>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
					</form>
        		</ul>
        	</div>
			@endauth
    	</div>
    </nav>

	<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset($post->image) }}');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h1 class="title">{{$post->title}}</h1>
					<br />
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="container">
            <div class="section section-text">
                <div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p>{{$post->content}}</p>
    				</div>
				</div>
			</div>

			<div class="section section-blog-info">
                <div class="row">
					<div class="col-md-8 col-md-offset-2">

						<div class="row">
							<div class="col-md-6">
								<div class="blog-tags">
									Tags:
									<span class="label label-primary">Photography</span>
									<span class="label label-primary">Stories</span>
									<span class="label label-primary">Castle</span>
								</div>
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-google btn-round pull-right">
									<i class="fa fa-google"></i> 232
								</a>
								<a href="#" class="btn btn-twitter btn-round pull-right">
									<i class="fa fa-twitter"></i> 910
								</a>
								<a href="#" class="btn btn-facebook btn-round pull-right">
									<i class="fa fa-facebook-square"></i> 872
								</a>

							</div>
						</div>

						<hr />

						<div class="card card-profile card-plain">
							<div class="row">
								<div class="col-md-2">
									<div class="card-avatar">
										<a href="#">
											<img class="img" src="../assets/img/faces/card-profile1-square.jpg">
										</a>
									<div class="ripple-container"></div></div>
								</div>
								<div class="col-md-8">
									<h4 class="card-title">Alec Thompson</h4>
									<p class="description">I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound...I like good music from Youtube.</p>
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-default pull-right btn-round">Follow</button>
								</div>
							</div>
						</div>
					</div>
    			</div>
            </div>

        </div>
    </div>

	<footer class="footer footer-black">
		<div class="container">
			<a class="footer-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>


			<ul class="pull-center">
				<li>
					<a href="#">
					   Blog
					</a>
				</li>
				<li>
					<a href="#">
						Presentation
					</a>
				</li>
				<li>
					<a href="#">
					   Discover
					</a>
				</li>
				<li>
					<a href="#">
						Payment
					</a>
				</li>
				<li>
					<a href="#">
						Contact Us
					</a>
				</li>
			</ul>

			<ul class="social-buttons pull-right">
				<li>
					<a href="https://twitter.com/" target="_blank" class="btn btn-just-icon btn-simple">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/" target="_blank" class="btn btn-just-icon btn-simple">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/" target="_blank" class="btn btn-just-icon btn-simple">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
			</ul>

		</div>
	</footer>

</body>
	<!--   Core JS Files   -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>

	<script src="{{ asset('assets/js/material.min.js') }}"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="{{ asset('assets/js/material-kit.js')}}" type="text/javascript"></script>
</html>
