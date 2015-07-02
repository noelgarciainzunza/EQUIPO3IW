
@extends('master')
@section('title')
Grupos por Materia
@endsection


@section('grupos')
@foreach ($grupos as $grupo)
<table align="center">
	<tr>
		<td><a href="{{ route('pdf',[$grupo->id, $grupo->maestro, $grupo->aula])}}"><h2 align="center">Grupo{{$grupo->id}}</h2></a></td>
	</tr>
	<tr>
		<td><b>Maestro:{{$grupo->maestro}}</td>
	</tr>
	<tr>
		<td><b>Aula:{{$grupo->aula}}</b></td>
	</tr>
	<tr>
		<td><b>Materia:{{$grupo->materia}}</b></td>
	</tr>
	</table>
	@endforeach
@endsection