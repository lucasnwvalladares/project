@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h2>Cadastrar uma Língua Estrangeira</h2>

		    <form method="POST">

		    	{{ csrf_field() }}

		    	<div class="form-group">

				    Idioma:
				    <input type="text" name="name" class="form-control">

			    </div>

			    <div class="form-group">

				    <input type="submit" name="Enviar" class="btn btn-primary">

			    </div>

		    </form>

		</div>
	</div>

@stop