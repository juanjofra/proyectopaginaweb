@php
$configuracion = DB::table('configuracions')->where('id',  1)->first();

@endphp
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<title>{{$configuracion->nombre_tienda}}</title>

<style>
  body{
    margin: 0;
    padding: 0;
    height: 100vh;
    font-size: 0;
    background-color: #17D7E6;
  }
  img{
    width: 100%; 
    height: 100%;
  }
</style>
</head>

<body>
  <img src="assets/images/construccion.png" alt="">
</body>

</html>
