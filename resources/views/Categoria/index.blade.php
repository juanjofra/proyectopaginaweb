@extends('layouts.app')

@section('content')

<div class="card mt-3">
  <h5 class="card-header">
    <div class="row">
      <div class="col text-uppercase">Categorias</div>
      <div class="col text-right">
        <a href="{{route('categoria.create')}}" class="btn btn-outline-primary">Nueva Categoria</a>
      </div>
    </div>
    <div class="row">
    <div class="col ">Total: {{$categorias->count()}}</div>
    </div>
  </h5>
  <div class="card-body d-flex justify-content-around flex-wrap">
    @foreach ( $categorias as $categoria )
      <div class="card text-center m-3" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$categoria->nombre}}</h5>
        <p class="card-text">{{$categoria->descripcion}}</p>
          <div class="justify-content-between">
            <button type="button" class="btn btn-warning">Editar</button>
            
          <form action="/categoria/{{$categoria->id}}/destroy" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
          </div>
        </div>
      </div>    
    @endforeach
  </div>
</div>
	
@endsection