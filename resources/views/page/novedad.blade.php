<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @foreach ($metadatos as $metadato)
      <meta name="description" content="{{ $metadato->description }}">
      <meta name="keyword" content="{{ $metadato->keyword }}">
    @endforeach
  <title>::AchaPlast::</title>
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/materialize/materialize.min.css') }}" rel="stylesheet">

    <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet">

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>
<body>
@include('page.template.header')
<main class="novedad">
  <div class="container">
    <div><a class="gris-claro" href="{{ route('novedades') }}">« Volver</a></div>
      <div class="row" style="margin: 50px 0;">
        <div class="col s12 m6">
          <img class="responsive-img" src="{{ asset('imagenes/novedades/'.$novedad->image) }}" alt="">
        </div>
        <div class="col s12 m6">
          <div class="fs28 azul">{!! $novedad->{'title_'.$idioma} !!}</div>
          <div class="gris-claro">{!! $novedad->date !!}</div>
          <div class="gris-oscuro bold">{!! $novedad->{'text_'.$idioma} !!}</div>
          @if($novedad->route)
          <button class="btn z-depth-0 bg-azul"><a class="blanco" href="{{ asset('imagenes/novedades/'.$novedad->route) }}" target="_blank">FICHA PDF</a></button>
          @endif
        </div>
      </div>
  </div>
</main>
@include('page.template.footer')
</body>
  <script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slider();
    });   
    </script>
</body>
</html>
<script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>
<script type="text/javascript">
 $(document).ready(function(){
  $('.dropdown-trigger').dropdown({
    constrainWidth: false,
    closeOnClick: false
  });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</html>