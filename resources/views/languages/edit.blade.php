@extends('layout')

@section('content')

	<div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h2>Editar uma Língua Estrangeira</h2>

		    <form method="POST">

		    	<div class="form-group">

				    <input type="text" name="language" class="form-control" value="{{ $language->name }}">

			    </div>

			    <div class="form-group">

				    <input type="submit" name="Salvar" class="btn btn-primary">

			    </div>

		    </form>

		</div>
	</div>

@stop