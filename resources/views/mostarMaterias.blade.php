@extends('master')


@section('materias')
 			<h2>hola</h2>
         <div class="list-group">

            @foreach ($materias as $materia)
         <a align="center" href="grupos/{{ $materia->id }}" class="list-group-item"><b>{{ $materia->nombre }}</b></a>
            @endforeach
            </div>

@endsection