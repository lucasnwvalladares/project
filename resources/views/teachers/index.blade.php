@extends('layout')

@section('content')

    <div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h3>Nossos professores:</h3>

		    <ul class="list-group">

		    	<div class="form-group">

			    	@foreach ($teachers as $teacher)

			    		<li class="list-group-item"> {{ $teacher->name }} - 
			    			{{ $teacher->id_language }} 
			    		</li>
			    		
			    	@endforeach

		    	</div>

		    	<div class="form-group">

		    		<a href="teachers/create" class="btn btn-primary">Cadastrar novo professor</a>

		    	</div>

		    </ul>

	    </div>
	    
	</div>

@stop