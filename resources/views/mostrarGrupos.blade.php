@extends('master')

@section('title')
Grupos por Materia
@endsection

@section('materias')
   @parent

@endsection
@section('content')
@foreach ($grupos as $grupo)
<table align="center">
	<tr>
		<td><a href=""><h2 align="center">Grupo{{$grupo->id}}</h2></a></td>
	</tr>
	<tr>
		<td><b>Maestro:</td>
	</tr>
	<tr>
		<td><b>Aula:</b></td>
	</tr>
	<tr>
		<td><b>Materia:</b></td>
	</tr>
	</table>
	@endforeach
@endsection