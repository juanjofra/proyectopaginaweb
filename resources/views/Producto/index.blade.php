@extends('layouts.app')

@section('content')

<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col" class='text-center'>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td class='text-center'>
        <button class="btn btn-warning">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td class='text-center'>
        <button class="btn btn-warning">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td class='text-center'>
        <button class="btn btn-warning">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
   
  </tbody>
</table>

	

	
@endsection