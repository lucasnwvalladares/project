@extends('layout')

@section('content')

    <div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h3>Nossos alunos:</h3>

		    <ul class="list-group">

		    	<div class="form-group">

			    	@foreach ($students as $student)

			    		<li class="list-group-item"> {{ $student->name }} - 
			    			{{ $student->id_teacher }} 
			    		</li>

			    	@endforeach

			    </div>

		    	<div class="form-group">

		    		<a href="students/edit" class="btn btn-primary">Cadastrar novo aluno</a>

		    	</div>

		    </ul>

	    </div>
	    
	</div>

@stop