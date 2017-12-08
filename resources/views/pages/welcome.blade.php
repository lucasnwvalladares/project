@extends('layout')

@section('content')

    <div class="row">

		<div class="col-md-6 col-md-offset-3">

		    <h1>Bem Vindo</h1>

		    <ul class="list-group">

		    	<li class="list-group-item"><a href="about">Sobre</a></li>

		    	<li class="list-group-item"><a href="students">Mostrar todos os alunos cadastrados</a></li>

		    	<li class="list-group-item"><a href="teachers">Mostrar todos os professores cadastrados</a></li>

		    	<li class="list-group-item"><a href="languages">Mostrar todos os idiomas cadastrados</a></li>

		    	<li class="list-group-item"><a href="students/edit">Cadastrar um Aluno</a></li>

		    	<li class="list-group-item"><a href="teachers/edit">Cadastrar um Professor</a></li>

		    	<li class="list-group-item"><a href="languages/edit">Cadastrar uma Língua Estrangeira</a></li>

		    </ul>

	    </div>
	    
	</div>
@stop