@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h3>Idiomas ofertados:</h3>

		    <ul class="list-group">

		    	<div class="form-group">

			    	@foreach ($languages as $language)

			    		<li class="list-group-item"> {{ $language->name }} </li>

			    	@endforeach

		    	</div>

		    	<div class="form-group">

		    		<a href="languages/create" class="btn btn-primary">Cadastrar novo idioma</a>

		    	</div>

		    </ul>

	    </div>
	    
	</div>

@stop