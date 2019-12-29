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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.4731127900372!2d-58.61423491908616!3d-34.64275286204314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb89d4e9f0b75%3A0x867b0651fdf42815!2sAchaPlast+S.A.!5e0!3m2!1ses!2sar!4v1534260040843" width="100%" height="400" frameborder="0" style="border:0; margin-top: -20px; padding: -20px;" allowfullscreen></iframe>
<div class="hide-on-med-and-down cero" style="background: #EBEBEB;">
  <div class="container cero" style="width: 80%;">  
    <div class="row cero">
      <div class="verde1 fw7 fs20 cero Roboto mayus" style="margin-top: -5px;padding: 20px 0 20px 10px;">@lang('general.contacto')</div>
    </div>  
  </div>
</div>
{!!Form::open(['route'=>'contacto.enviar', 'method'=>'POST'])!!}
<div class="container" style="width: 80%;">
<div class="row">
	<div class="input-field col m6 s12">
	{!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}
	<label for="nombre">@lang('general.cnombre')</label>
	</div>
	<div class="input-field col m6 s12">
	{!!Form::text('telefono',null,['class'=>'validate', 'required'])!!}
	<label for="telefono">@lang('general.ctelefono')</label>
	</div>
</div>
<div class="row">
	<div class="input-field col m6 s12">
	{!!Form::text('empresa',null,['class'=>'validate', 'required'])!!}
	<label for="empresa">@lang('general.cempresa')</label>
	</div>
	<div class="input-field col m6 s12">
	{!!Form::email('email',null,['class'=>'validate',  'required'])!!}
	<label for="email">@lang('general.ccorreo')</label>
	</div>
</div>
<div class="row">
	<div class="input-field col m6 s12" style="margin-top: 47px;">
	<label for="mensaje">@lang('general.cmensaje')</label>
	{!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea', 'required'])!!}
	</div>
	<div class="input-field col m6 s12" style="padding-top:0px; margin-bottom: 20px;">	
	<div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj"></div>
	<div class="fs15 gris15" style="font-family: 'Source Sans Pro';">@lang('general.ccondiciones')</div>
	</div> 
</div>
<div class="row" style="padding-bottom: 50px;">
	<div align="center">                      
	<div class="col m12">
	<button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: #303F9F; padding: 0px 50px 5px 50px; color: white;">@lang('general.cenviar')
	</button>
	</div>
	</div>
</div>
</div>
{!!Form::close()!!}

@include('page.template.footer')

<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>  
<script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>