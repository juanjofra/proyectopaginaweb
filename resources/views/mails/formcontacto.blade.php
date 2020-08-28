<!DOCTYPE html>
<html lang="es">
<head>
  <title>Nuevo Mensaje de contacto</title>
</head>
<body>
  <p>Formulario de contacto nuevo mensaje!</p>
  <p>Estos son los datos del usuario que envio el contacto:</p>
  <ul>
    <li>
      <strong>Nombre:</strong>
        {{$author}}
    </li>
    <li>
      <strong>Email:</strong>
      {{$email}}
    </li>
    <li>
      <strong>Telefono:</strong>
      {{$phone}}
    </li>
    <li>
      <strong>Mensaje:</strong>
      <p>{{$comment}}</p>
    </li>
  </ul>
</body>
</html>