@extends('layouts.app')

@section('content')

<div class="row m-0  mt-1">
  <div class="col-2 p-0">
        @include('layouts.sidebar')
  </div>
  <div class="col-10">
      <div class="container">
        <div class="row mt-3 justify-content-end">
          <a href="{{route('producto.create')}}" class="btn btn-primary">Nuevo Producto</a>
        </div>
        <div class="row">
          <table class="table table-sm mt-4 shadow rounded">
            <thead class="thead-dark rounded">
              <tr class="text-center">
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion Corta</th>
                <th scope="col">Categoria</th>
                <th scope="col">precio</th>
                <th scope="col">oferta</th>
                <th scope="col " class='text-center'>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($productos as $producto)
              <tr class="text-center">
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion_corta}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td>{{$producto->precio_venta}}</td>
                <td>{{$producto->oferta}}</td>
                <td class='text-center justify-content-center align-content-center'>
                  <a href="{{route("producto.edit", ['producto' => $producto->id])}}" class="btn btn-lg"><i class="fas fa-edit"></i></a>
                  <a href="{{route("galeria.index", ['producto' => $producto->id])}}" class="btn btn-lg"><i class="far fa-images"></i></a>
                  <producto-destacado producto-id={{$producto->id}} producto-destacado={{ $producto->destacado}}></producto-destacado>
                  <eliminar-producto producto-id={{ $producto->id }}></eliminar-producto>
                </td>
              </tr>  
              @endforeach
             
            </tbody>
          </table>
          {{$productos->links()}}
        </div>
      </div>
  </div>
</div>




	

	
@endsection