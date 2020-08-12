@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="card mt-4 shadow">
      <h5 class="card-header">Nueva Categoria</h5>
      <div class="card-body">
        <div class="row justify-content-center">
          <div class="col-5 ">
            <form  action="/categoria/{{$categoria->id}}/update" method="POST">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre:</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="emailHelp" value="{{ old('nombre', $categoria->nombre)}}">
                @error('nombre')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                  </span> 
                @enderror
              </div>
    
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion:</label>
              <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name="descripcion" rows="3">{{ old('descripcion', $categoria->descripcion)}}</textarea>
                @error('descripcion')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                  </span> 
                @enderror
              </div>
    
              <div class="from-group text-center mt-5">
                <div class="row">
                  <div class="col">
                    <button type="submit" class="btn btn-primary btn-block shadow-sm">Editar</button>
                  </div>
                  <div class="col">
                    <a href="{{ route('categoria.index')}}" class="btn btn-danger btn-block shadow-sm">Cancelar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection