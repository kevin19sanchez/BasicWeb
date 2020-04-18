@extends('plantilla')

@section('seccion')
<h1>Detalle de nota: </h1>
<h4>Id: {{$nota2 -> id}}</h4>
<h4>Nombre: {{$nota2 -> nombre}}</h4>
<h4>Detalle: {{$nota2 -> descripcion}}</h4>


@endsection