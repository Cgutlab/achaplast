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

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>
<body>
@include('page.template.header')
<div class="hide-on-med-and-down cero" style="background: #EBEBEB;">
  <div class="container cero" style="width: 80%;">  
    <div class="row cero">
      <div class="Roboto verde1 fw7 fs20 cero" style="padding: 20px 0 20px 10px;">@lang('general.buscar')</div>
    </div>  
  </div>
</div>

<div class="container" style="margin-bottom: 132px;">
    <nav class="z-depth-0" style="margin-top: 70px; margin-bottom: 132px;">

        <div class="nav-wrapper z-depth-0">

            {!! Form::open(['route'=>'buscador', 'method' => 'POST']) !!}

                <div class="input-field" style="background: white; border: 1px solid gray;">
                    <input id="busqueda" name="busqueda" type="search" placeholder="@lang('general.buscador')" required>

                    <label class="label-icon" for="search"><i class="material-icons" style="color: #AFAFAF; font-weight: 600;">search</i></label>

                    <i class="material-icons azul" style="color: #3E4EB8;">chevron_right</i>

                </div>

            {!! Form::close() !!}

        </div>

    </nav>
	<div class="row">
    @if($busca==1)
        @foreach ($productos as $producto)
        <div class="col s12 m6 l4" style="position: relative;">
        <div class="card z-depth-0">
          <div class="card-image center-align">
            <a href="{{route('productot', $producto->id)}}" class="naranja fs20 mayus">
            <div class="efecto">
            <span class="central"><i class="material-icons">add</i></span>
            </div>
            <img src="{{asset('imagenes/achaplast_productos/'.$producto->imagen)}}" style="border: 1px solid #DDD;">
            </a>
          </div>
          <div class="card-content cero center-align yp10" style="margin:0px 15px 0px 15px; height: 180px;">
            <div class="Roboto fw6 verde1 editorRico cero">{!!($producto->{'titulo_'.$idioma})!!}</div>
            <div class="Roboto fw4 gris12 editorRico cero yp10">{!!($producto->{'breve_'.$idioma})!!}</div>
          </div>
        </div>
        </div>
        @endforeach
    @endif
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