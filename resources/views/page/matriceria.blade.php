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

<div class="hide-on-med-and-down cero" style="margin-top: -20px; padding-top: -20px;">

@if($matriceria->imagen != null)

<img src="{{asset('imagenes/matriceria/'.$matriceria->imagen)}}" style="margin-top: -20px; padding-top: -20px;width: 100%; height: 420px; ">

@endif

</div>



<div class="ym60">

<div class="container" style="width: 80%;">

<div class="row">

  <div class="col l12">

    <div align="center">

      <div class="Roboto fw5 verde1 fs36 cero">

        <b>{!!$matriceria->{'titulo_'.$idioma} !!}</b>

      </div>

      <div class="lineaNaranja"></div>

      <div class="yp35 Roboto fw3 gris12 fs20 cero editorRico">

        {!!$matriceria->{'descripcion_'.$idioma} !!}

      </div>

      </div>

    </div>

  </div>

</div>

</div>

</div>

<div style="background: #F5F5F5;" align="center">

<div class="container" style="width: 80%;">

  <div class="Roboto fw5 verde1 fs24 cero ym60 yp35">

    @lang('general.ctitulo')

  </div>

  <div class="Roboto fw5 gris15 fs18 cero yp35">

    @lang('general.csubtitulo')

  </div>

</div>


<div align="center">
{!!Form::open(['route'=>'contacto.enviar', 'method'=>'POST'])!!}

<div class="container" style="width: 100%;">

<div class="row">
  <div class="offset-l4 input-field col l4 m6 s12">
  {!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}
  <label for="nombre">@lang('general.cnombre')</label>
  </div>
</div>

<div class="row">
  <div class="offset-l4 input-field col l4 m6 s12">
  {!!Form::text('apellido',null,['class'=>'validate', 'required'])!!}
  <label for="apellido">@lang('general.capellido')</label>
  </div>
</div>

<div class="row">
  <div class="input-field offset-l4 col l4 s12" style="margin-top: 47px;">
  <label for="mensaje">@lang('general.cmensaje')</label>
  {!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea'])!!}
  </div>
</div>

<div class="row">
  <div class="offset-l4 input-field col l4 m6 s12">
  {!!Form::text('email',null,['class'=>'validate', 'required'])!!}
  <label for="email">@lang('general.ccorreo')</label>
  </div>
</div>

<div class="row">
  <div class="offset-l4 input-field col l4 m6 s12">
  {!!Form::text('empresa',null,['class'=>'validate', 'required'])!!}
  <label for="empresa">Empresa</label>
  </div>
</div>

<div class="row">

  <div class="input-field offset-l4 col l4 s12" required>  

  <div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj" required></div>

  </div> 

  <div class="offset-l4 col l4 s12">

  <label>

    <input type="checkbox" required/>

    <span class="fs14 gris15" style="font-family: 'Source Sans Pro';">Acepto los términos y condiciones de privacidad</span>

  </label>

  </div>

</div>

<div class="row" style="padding-bottom: 50px;">

  <div align="center">                      

  <div class="col m12 s12">

  <button class="btn waves-light z-depth-0" type="submit" name="action" style="background-color: #303F9F; padding: 0px 50px 5px 50px; color: white;">Enviar

  </button>

  </div>

  </div>

</div>

</div>

{!!Form::close()!!}

</div>
</div>






@include('page.template.footer')



<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>  

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