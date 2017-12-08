<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">

	<title>Master Layout</title>

	@yield('header')

</head>
<body>

	<div class="container-fluid">
	    @yield('navbar')
	    <nav class="navbar navbar-default">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="http://personalizedenglish.com.br/">Red&Yellow</a>
	        </div>
	    
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="navbar-collapse-1">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="/home">Home</a></li>
	            <li><a href="/about">Sobre</a></li>
	            <li><a href="/students">Alunos</a></li>
	            <li><a href="/teachers">Professores</a></li>
	            <li><a href="/languages">Idiomas</a></li>
	            <li>
	              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="/register" aria-expanded="false" aria-controls="nav-collapse1">Cadastros</a>
	            </li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
	      </div><!-- /.container -->
	    </nav><!-- /.navbar -->
	</div><!-- /.container-fluid -->

	<div class="container">
		@yield('content')
	</div>

	@yield('footer')

</body>
</html>