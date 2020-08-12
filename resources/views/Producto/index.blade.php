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
          <table class="table table-sm mt-4 shadow">
            <thead class="thead-dark ">
              <tr class="text-center">
                <th scope="col">Titulo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col " class='text-center'>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($productos as $producto)
              <tr class="text-center">
                <td>{{$producto->titulo}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td class='text-center justify-content-center align-content-center'>
                  <a href='{{url("/producto/$producto->id/edit")}}' class="btn btn-lg"><i class="fas fa-edit"></i></a>
                  <a class="btn btn-lg"><i class="far fa-images"></i></a>
                  <a class="btn btn-lg"><i class="fas fa-trash-alt text-danger"></i></a>
                  
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