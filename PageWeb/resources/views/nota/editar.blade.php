@extends('plantilla')

@section('seccion')
<br>
<h4>Editar Nota {{$nota3->id}}</h4>

@if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif

<form action="{{route('nota.update', $nota3->id)}}" method="POST">
    @method('PUT')
    @csrf
    @error('nombre')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              El nombre es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
    @enderror 
        @if ($errors->has('descripcion'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              La descripcion es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
   
         <input type="text" name="nombre" placeholder="Escribe nombre" class="form-control mb-2"
          value="{{$nota3 -> nombre}}">

          <input type="text" name="descripcion" placeholder="Escribe descripcion" class="form-control mb-2"
          value="{{$nota3 -> descripcion}}">

          <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
        </form><br>

@endsection

<!--
         @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
    @enderror
-->