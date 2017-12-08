@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h2>Cadastrar um Aluno</h2>

		    <form  method="POST">

		    	{{ csrf_field() }}

		    	<div class="form-group">

				    Nome e Sobrenome:
				    <input type="text" name="name" class="form-control">

				</div>

				<div class="form-group">

				    Telefone (c/ DDD):
				    <input type="text" name="phone" class="form-control">

			    </div>
				    

				<div class="form-group">

				    E-mail:
				    <input type="email" name="email" class="form-control">

			    </div>

			    <div class="form-group">

				    Professor:
				    <select class="form-control" name="teacher">

				    	@foreach($teachers as $teacher)

				    		<option value="{{ $teacher->id }}">{{ $teacher->name }}</option>

				    	@endforeach

				    </select>

			    </div>    
				    
			    <div class="form-group">

				    <input type="submit" name="Enviar"  class="btn btn-primary">

			    </div>

		    </form>

		</div>

	</div>

@stop