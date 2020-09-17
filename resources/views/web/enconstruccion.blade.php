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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.0.0/modern-normalize.min.css" integrity="sha512-ISS7cAi1PEhQ8jnbJpJZMd29NlhNj4AWYyLOSp2CE/CsHxTCu+r+t0D2yoJudVrd0/8fTVPUVDzY5Tvli75u/g==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/construction.css">

</head>

<body>
  <div class="container">
    <section class="section-left">
       <div class="contenedor">
        <span><h1>PAGINA EN CONSTRUCCIÓN</h1></span>
        <span><p>Estamos trabajando para brindarte lo mejor.</p></span>
        <img src="assets/images/logo.png" alt="">
       </div>
    </section>

    <section class="section-right">
      <img src="assets/images/imageconstrution.png" alt="">
    </section>
  </div>

</body>

</html>
