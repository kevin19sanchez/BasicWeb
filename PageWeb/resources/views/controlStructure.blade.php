@extends('master')

@section('seccion')

<h1>Este es mi equipo de trabajo</h1>
    @foreach($equipo as $item)

        <a href="{{ route('about', $item)}}" class="h4 text-danger">{{$item}}</a><br>

    @endforeach

    @if(!empty($nombre))

        @switch($nombre)

            @case($nombre == 'Bayern')
            <h2>El nombre es {{$nombre}} :</h2>
            <p>El Bayern munich tiene 5 copas de europa</p>
            @break

            @case($nombre == 'Madrid')
            <h2>El nombre es {{$nombre}} :</h2>
            <p>El Real Madird tiene 13 copas de europa</p>
            @break

            @case($nombre == 'Juventus')
            <h2>El nombre es {{$nombre}} :</h2>
            <p>La Juventus tiene 5 copas de europa</p>
            @break

        @endswitch

    @endif

@endsection