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

{{-- MIGA --}}

<div class="hide-on-med-and-down cero" style="background: #EBEBEB; border-bottom: 1px solid #DDDDDD;">

  <div class="container cero" style="width: 82%;">  

    <div class="row cero">


      <div class="gris14 fw5 fs17 cero" style="padding: 25px 0 5px 10px;">

      <a href="{{route('achaplasts')}}" class="gris14 Roboto">

      AchaPlast

      </a>

       | 

      @foreach($categorias as $categoria)

      @if($categoria->id == $category->id)

      <a href="{{route('achaplast', $categoria->id)}}" class="gris14 Roboto">

      {{($categoria->{'titulo_'.$idioma}) }}

      </a> 

      @endif

      @endforeach

      </div>

    </div>  

  </div>

</div>

{{-- MIGA --}}





<div class="yp35">

<div class="container yp10" style="width: 82%;">

<div class="row cero">



<style type="text/css">
  .letrasMayus{
    text-transform: uppercase;
  }
</style>

{{-- MENU --}}

<div class="col l3 m12 s12">

  <div style="width: 80%;">

    @foreach($categorias as $categoria)

    @if($categoria->id == $category->id)

    <div class="row">

      <a href="{{route('achaplast', $categoria->id)}}">

      <div class="col l12 m6 s12">

        <div class="sublineaNaranja orang1 fs15 fw7 Roboto letrasMayus">

          {{($categoria->{'titulo_'.$idioma}) }}

          <aside class="right">

            <img src="{{asset('imagenes/help/arrowDown.png')}}">  

          </aside>

        </div>

      </div>

      </a>       

    </div>

    <div class="row"> 

      <div class="col l12 m6 s12">

        @foreach($productos as $producto)

        @if($producto->id_categoria == $category->id)

            <a href="{{route('productot', $producto->id)}}">

          <div class="gris12 fs14 fw5 Roboto">

          &nbsp;&nbsp;{{($producto->{'titulo_'.$idioma}) }}

          </div>

            </a>

        @endif

        @endforeach

      </div>

    </div>

    @else

    <div class="row">

      <a href="{{route('achaplast', $categoria->id)}}">

      <div class="col l12 m6 s12">

        <div class="sublineaNaranja gris14 fw7 Roboto letrasMayus">

            {{($categoria->{'titulo_'.$idioma}) }}

          <aside class="right ">

            <img src="{{asset('imagenes/help/arrowEste.png')}}">        

          </aside>

        </div>

      </div>

      </a>       

    </div>

    @endif  

    @endforeach

  </div>

</div>

{{-- MENU --}}





{{-- CONTENIDO --}}

<div class="col l9">

<div class="row">

@foreach($productos as $producto)

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
  <div class="card-content cero center-align" style="margin:0px 15px 0px 15px; padding: 5px 0 0 0; height: 70px;">
    <div class="Roboto fw6 verde1 editorRico cero">{!!($producto->{'titulo_'.$idioma}) !!}</div>
    <div class="Roboto fw4 gris12 editorRico cero">{!!($producto->{'breve_'.$idioma}) !!}</div>
  </div>
</div>
</div>

@endforeach

</div>

</div>

{{-- CONTENIDO --}}





</div>

</div>

</div>



@include('page.template.footer')

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