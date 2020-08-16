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
              <div class="col text-uppercase">Usuarios</div>
          </h5>
          <div class="card-body ">
            @foreach ($users as $user)
            <table class="table table-sm mt-4 shadow rounded">
              <thead class="thead-dark ">
                <tr class="text-center">
                  <th scope="col">Nombre</th>
                  <th scope="col">Email</th>
                  <th scope="col">Autorizado</th>
                  <th scope="col " class='text-center'>Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>@if($user->autorizacion) <span class="text-success text-uppercase">Autorizado</span>@else <span class="text-danger text-uppercase">Denegado</span> @endif</td>
                  <td class='text-center justify-content-center align-content-center'>
                    @if($user->autorizacion)
                    <form action='{{ url("/user/$user->id/denegar")}}' method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="fas fa-toggle-off"></i></button>
                    </form>
                  @else
                    <form action='{{ url("/user/$user->id/autorizar")}}' method="POST">
                      @csrf
                      <button type="submit" class="btn btn-primary"><i class="fas fa-toggle-on"></i></button>
                    </form>
                  @endif
                  </td>
                </tr>  
              </tbody>
            </table>  
            @endforeach
          
          </div>
        </div>
      </div>
  </div>
</div>



@endsection