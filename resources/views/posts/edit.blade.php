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

<body class="index-page">

	<nav class="navbar navbar-inverse">
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
    	</div>
    </nav>

	<div class="main main-raised">
		<div class="container" style="margin-top:8rem;padding:30px 15px;">
            <div class="row">
                <div class="col-xs-12">
                    <form class="mt-4" action="{{ route('update_post_path', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data" value="{{$post->title}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class="form-control" id="title" name="title" placeholder="Título" value="{{$post->title}}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" id="status" name="status">
                                    <option value="Borrador" @if( $post->status == 'Borrador') selected @endif>Borrador</option>
                                    <option value="Publicado" @if( $post->status == 'Publicado') selected @endif>Publicado</option>
                                    <option value="Inactivo" @if( $post->status == 'Inactivo') selected @endif>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Contenido</label>
                                    <textarea class="form-control" id="content" name="content" rows="8">{{$post->content}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-file-upload">
                                    <input type="file" id="image" name="image">
                                    <div class="input-group">
                                        <input type="text" readonly="" class="form-control" placeholder="Imagen de portada">
                                        <span class="input-group-btn input-group-s">
                                            <button type="button" class="btn btn-just-icon btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
	<!--   Core JS Files   -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>

	<script src="{{ asset('assets/js/material.min.js') }}"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="{{ asset('assets/js/material-kit.js')}}" type="text/javascript"></script>
</html>
