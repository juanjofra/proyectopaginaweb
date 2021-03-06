@extends('layouts.app')

@section('content')
<div class="row m-0  mt-1">
  <div class="col-2 p-0">
        @include('layouts.sidebar')
  </div>
  <div class="col-10">
      <div class="container">
      <div class="card mt-3 shadow-sm">
        <h5 class="card-header">
          <div class="row">
            <div class="col text-uppercase">Categorias</div>
            <div class="col text-right">
              <a href="{{route('categoria.create')}}" class="btn btn-primary">Nueva Categoria</a>
            </div>
          </div>
          <div class="row">
          <div class="col ">Total: {{$categorias->count()}}</div>
          </div>
        </h5>
        <div class="card-body d-flex justify-content-around flex-wrap ">
          @foreach ( $categorias as $categoria )
          <div class="card shadow m-3" style="width: 18rem;">
            <div class="card-header">
              <div class="row">
                <div class="col">
                  <h5 class="text-center">{{$categoria->nombre}}</h5>
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  @if (count($categoriasDestacados) < 3 && $categoria->destacado === 0)
                    <form action="{{route('categoria.destacar', ['categoria' => $categoria->id])}}" method="POST">
                      @csrf
                      <button type="submit" class="btn text-success"><i class="fas fa-check"></i></button>
                    </form>
                  @endif
                  @if ( $categoria->destacado === 1)
                  <form action="{{route('categoria.nodestacar', ['categoria' => $categoria->id])}}" method="POST">
                    @csrf
                    <button class="btn text-danger"><i class="fas fa-times"></i></button>
                  </form>
                 
                  @endif
                  
                </div>
              </div>
            </div>
            <div class="card-body flex">
              <p class="card-text text-center">{{$categoria->descripcion}}</p>
               
                <div class="text-center">
                  @if($categoria->activo)
                    <form action="{{route("categoria.desactivar", ['categoria' => $categoria->id])}}" method="POST">
                      <a href="{{route('categoria.edit', ['categoria' => $categoria->id])}}" class="btn btn-success text-center"><i class="fas fa-edit"></i></a>
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="fas fa-toggle-off"></i></button>
                    </form>
                  @else
                    <form action="{{route("categoria.activar", ['categoria' => $categoria->id])}}" method="POST">
                      <a href="{{route("categoria.edit", ['categoria' => $categoria->id])}}" class="btn btn-success text-center"><i class="fas fa-edit"></i></a>
                      @csrf
                      <button type="submit" class="btn btn-primary"><i class="fas fa-toggle-on"></i></button>
                    </form>
                  @endif
                </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      </div>
  </div>
</div>

	
@endsection