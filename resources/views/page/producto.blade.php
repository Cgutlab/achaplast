<!DOCTYPE html>

<html lang="es">

<head>

  

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="author" content="">
    @foreach ($metadatos as $metadato)
      <meta name="description" content="{{($producto->texto1)}}">
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

<div class="hide-on-med-and-down cero" style="background: #EBEBEB; border-bottom: 1px solid #DDDDDD;">

  <div class="container cero" style="width: 82%;">  

    <div class="row cero">

      <div class="gris14 fw5 fs17 cero" style="padding: 25px 0 5px 10px;">

      <a href="{{route('achaplasts')}}" class="Roboto gris14">

      AchaPlast

      </a>

       | 

      @foreach($categorias as $categoria)

      @if($categoria->id == $category->id)

      <a href="{{route('achaplast', $categoria->id)}}" class="Roboto gris14">

      {{($categoria->{'titulo_'.$idioma}) }}

      </a> 

       | 

      @if($producto->id_categoria == $category->id)

      <span class="Roboto gris14">

      {{($producto->{'titulo_'.$idioma}) }}

      </span> 

      @endif

      @endif

      @endforeach

      </div>

    </div>  

  </div>

</div>





<div class="yp35">

<div class="container" style="width: 82%;">

<div class="row cero">

  <div class="col l3 m12 s12">



  <div style="width: 80%;">

    @foreach($categorias as $categoria)

    @if($categoria->id == $category->id)

    <div class="row">

      <a href="{{route('achaplast', $categoria->id)}}">

      <div class="col l12 m6 s12">

        <div class="sublineaNaranja orang1 fs15 fw7 Roboto mayus">

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



        @if($producto->id == $productoI->id)

        <div class="orang1 fs14 fw6 Roboto">

        @else

        <div class="gris12 fs14 fw5 Roboto">

        @endif



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

        <div class="sublineaNaranja gris14 fw7 Roboto">

            {{strtoupper($categoria->{'titulo_'.$idioma}) }}

          <aside class="right">

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

  <div class="col l9 s12">

  <div class="verde1 fs36 xm5 Roboto fw3">{!!strtoupper($productoI->{'titulo_'.$idioma}) !!}</div>

   

  <div class="fullineaVerde"></div>

   <div class="xm5 yp20" style="padding-bottom: 30px;">


   <div class="row">  
    <div class="col l5">
      <div class="col l12 img-responsive" id="imagen-grande" style="width: 98%; height: 280px; margin: 0 0 0 0; padding: 0;">
        {{-- <a href="#" id="enlace" data-fancybox="images"> --}}

          <img id="imgDisp" src="{{asset('imagenes/achaplast_productos/'.$productoI->imagen)}}" style="width: 100%; height: 100%; border:1px solid #DDDDDD;">           

        {{-- </a> --}}
      </div>
      <div class="col l12" style="width: 100%; height: 32%; margin: 5px 0 0 0; padding: 0;">     
          @if($productoI->imagen!=null)
            <img id="imgName" onclick="changeImage('{{asset('imagenes/achaplast_productos/'.$productoI->imagen)}}')" src="{{asset('imagenes/achaplast_productos/'.$productoI->imagen)}}"  style="height: 100px;width: 32%; border:1px solid #DDDDDD; margin: 0px;" {{-- onClick="javascript: verImagenEnGrande('{{asset('imagenes/achaplast_productos/'.$productoI->imagen)}}');" --}}>
          @endif
          @if($productoI->imagen1!=null)
            <img id="imgName" onclick="changeImage('{{asset('imagenes/achaplast_productos/'.$productoI->imagen1)}}')" src="{{asset('imagenes/achaplast_productos/'.$productoI->imagen1)}}" style="height: 100px;width: 32%; border:1px solid #DDDDDD; margin: 0px;" {{-- onClick="javascript: verImagenEnGrande('{{asset('imagenes/achaplast_productos/'.$productoI->imagen1)}}');" --}}>
          @endif
          @if($productoI->imagen2!=null)
            <img id="imgName" onclick="changeImage('{{asset('imagenes/achaplast_productos/'.$productoI->imagen2)}}')" src="{{asset('imagenes/achaplast_productos/'.$productoI->imagen2)}}" style="height: 100px;width: 32%; border:1px solid #DDDDDD; margin: 0px;" {{-- onClick="javascript: verImagenEnGrande('{{asset('imagenes/achaplast_productos/'.$productoI->imagen2)}}');" --}}>     
          @endif
      </div>
    </div>
    <div class="coll7">
      
       <div class="editorRico Roboto fs16">

       {!!($productoI->{'texto1_'.$idioma}) !!}
       </div>

    </div>
     <div>

   </div>
{{-- 
    @if($productoI->pdf != '')

    <a href="{{asset('imagenes/achaplast_productos/pdf/'.$productoI->pdf)}}" class="btn btn-ficha z-depth-0" target="_blank" style="background: #303F9F;

    padding-left: 15px; padding-right: 15px; font-weight: 600; margin-top: 20px;">Descargar PDF</a>

    @endif
--}}

     </div>

   </div>   

  </div>

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
function changeImage(imgName)
{
  image = document.getElementById('imgDisp');
  image.src = imgName;
}
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