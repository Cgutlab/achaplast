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



<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/'.$favicon->imagen) }}" />
  
</head>

<body>

@include('page.template.header')



{{-- Slider --}}

<div class="slider">

    <ul class="slides">

        @foreach($sliders as $slider)

            <li>

                <img src="{{ asset('imagenes/sliders/'.$slider->imagen) }}" style="filter:brightness(0.7);">

                <div class="caption center-align">

                    <h2 class="editorRico sombraletras fw4">{!!$slider->{'titulo_'.$idioma} !!}</h2>

                </div>

            </li>

        @endforeach

    </ul>

</div>





{{-- Contenido --}}

<div class="container editorRico yp20" style="width: 84%;">

  @foreach($contenidos as $contenido)

  <div class="cero fw6 verde1 fs36 center-align">  

      <b>{!!$contenido->{'titulo_'.$idioma} !!}</b>

  </div>

  <div align="center">

  <div class="lineaNaranja"></div>

  </div>

  <div class="Roboto fs20 gris12 fw3 yp20">

    {!!$contenido->{'texto_'.$idioma} !!}

  </div>

  @endforeach

</div>

 

{{-- Destacados --}}

<div class="container" style="width: 83%; padding: 70px 0 70px 0;">

<div class="row">

@foreach($destacados as $destacado)

<div class="col s12 m12 l4" style="position: relative;">

  <div class="card z-depth-0">

    <div class="card-image center-align">

    <a href="{{($destacado->ruta)}}" class="naranja fs20 mayus">

      <div class="efecto">

        <span class="central"><i class="material-icons">add</i></span>

      </div>

      <img src="{{('imagenes/destacados/'.$destacado->imagen)}}" style="border: 1px solid #DDD;width: 100%; height: 100%;">

    </a>

    </div>

    <div class="card-content cero" style="margin:25px 15px 15px 15px;padding: 0;">

      <div class="Roboto fw6 fs20 gris13 editorRico">{!!$destacado->{'titulo_'.$idioma}!!} </div>

      <div class="Roboto fw4 fs17 gris12 editorRico yp10">{!!$destacado->{'texto_'.$idioma} !!} </div>

    </div>

  </div>

</div>

@endforeach

</div>

</div>



@include('page.template.footer')



</body>

</html>



<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>



    <script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>



<script>

  $(document).ready(function(){

  $('.slider').slider();

  });

</script>



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