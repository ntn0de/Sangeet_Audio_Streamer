<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</head>
<body>
	<div class="container">
		<h1 align="center">Sangeet</h1>
		<a href="{{ route('musics.index') }}" class="btn btn-default">View All Songs</a>
		<a href="{{ route('musics.create') }}" class="btn btn-default">Add Songs</a>
		<a href="{{ route('welcome') }}" class="btn btn-default">Home</a>
		<div class="row"> 
						@if(session()->has('errors'))
							<div class="alert alert-danger">
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						@if(session()->has('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
						<div class="panel-body">
						@yield('mselect')
						<div class="row">
							<div class="col-md-12">
								@yield('content')
							</div>
						</div>
						</div>
		</div>			
	</div>
	
</body>
</html>