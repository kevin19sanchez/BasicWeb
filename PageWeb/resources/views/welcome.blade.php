@extends('plantilla')

@section('seccion')
<div class="container my-4">
        <h1 class="display-4">Notas</h1><br>

        @if(session('mensaje'))
            <div class="alert alert-succes">
              {{session('mensaje')}}
            </div>
        @endif

        <form action="{{route('notas.crear')}}" method="POST">
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
          value="{{ old('nombre') }}">
          <input type="text" name="descripcion" placeholder="Escribe descripcion" class="form-control mb-2"
          value="{{ old('descripcion') }}">
          <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
        </form><br>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($nota as $item_nota)
    <tr>
      <th scope="row">{{$item_nota -> id}}</th>
      <td>
      <a href="{{route('nota.detalle', $item_nota)}}">
        {{$item_nota -> nombre}}
        </a>
      </td>
      <td>{{$item_nota -> descripcion}}</td>
      <td>
         <a href="{{route('nota.editar', $item_nota)}}" class="btn btn-warning btn-sm">Editar</a>
         
         <form action="{{route('nota.eliminar', $item_nota)}}" method="POST" class="d-inline">
         @method('DELETE')
         @csrf
          <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
         </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection