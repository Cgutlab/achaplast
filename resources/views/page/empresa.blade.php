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

<div class="hide-on-med-and-down">
@if($empresa->imagen != null)
<img src="{{asset('imagenes/empresa/'.$empresa->imagen)}}" style="height:100%; width: 100%; margin-top: -20px;">
@endif
</div>


<div class="container ym60 yp35" style="width: 100%">
<div class="row Roboto">
	<div class="col l6 ">
    <div  style="width: 98%;">
      <div class="cero fw6 verde1 fs36">{!!$empresa->{'titulo_'.$idioma} !!}</div>
      <div class="lineaNaranj2"></div>
      <div class="editorRico fw3 fs18 Roboto gris12 Roboto">
        {!!$empresa->{'texto_'.$idioma} !!}
      </div>
    </div>
	</div>
  <div class="col l6">
    @if($empresa->imagen2 != null)
    <div style="margin-top: 80px;">
    <img src="{{asset('imagenes/empresa/'.$empresa->imagen2)}}" class="responsive-img" style="height: 100%;width: 100%;">
    </div>
  @endif
  </div>
</div>
</div>
<br><br>



@include('page.template.footer')


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











{{-- 
QUIÉNES SOMOS<br>
<h2>Nuestra Empresa</h2>


DESDE 1953<br>
<h2>Nuestra Historia</h2>


Desde el año 1953 RADISTOR S.A. acumula en forma continua experiencia en la fabricación de tornillería standard y especial para distintas industrias. Somos una de las pocas plantas en Argentina que produce toda la gama de tornillería, acero latón e inoxidable.
<br><br>
Somos proveedores de las industrias Autopartes, Línea blanca y Electromecánicas. 
<br>
Cabe destacar que RADISTOR S.A. ya está transitando el camino de las “NORMAS ISO 9000” pudiendo así calificar como proveedora de prestigiosas empresas de nuestro país. RADISTOR S.A. está preparada para fabricar un producto de calidad y brindar un servicio apropiado para cada cliente.


Aurelio Scappini, nacido en Génova, en 1929, llega a Argentina a los 15 años de edad, iniciándose en el oficio de la tornería, pocos años después crea su primera fábrica metalúrgica de válvulas para neumáticos la que se constituirá luego en la más grande de Latinoamérica.
<br><br>
En el año 1956 el Sr. Aurelio Scappini, con otro componente, dotado de un enorme entusiasmo, fuerza de trabajo y gran capacidad técnica se reúne en un pequeño taller con escasos recursos tecnológicos, con el objeto de fabricar tornillos para madera.
<br><br>
El nuestro es el clásico ejemplo de la pequeña empresa metalúrgica Argentina que surge de la iniciativa de dos emprendedores que en sus comienzos no conocieron otra cosa que sacrificios y privaciones para lograr que ese taller fuese tomando forma de empresa. Los profundos conocimiento de mecánica y matricería que los fundadores aportaron sobre aquella humilde maquinaria, hizo que en pocos años se conquistaran rendimientos y producciones que los ponían en condiciones de obtener calidad y costo necesario para penetrar rápidamente en el mercado.
<br><br>
La empresa inicia una lenta pero indeclinable expansión durante toda la década del 60 que la lleva a ocupar el primer lugar como proveedora de tornillos para madera, y tornillos Withworth.
<br><br>
En el año 1970 se comienza la construcción de un excelente galpón, comenzando al final de esta época el trasvasamiento generacional con la incorporación del Ingeniero Eduardo Scappini. A comienzos de la década del 80’s nuestra empresa decide afrontar un ambicioso programa de reequipamiento tecnológico ultramoderno. En los 90´s ingresa el Ingeniero Adrián Scappini, desarrollando nuevos productos de última generación. Juntos los hermanos Scappini con el comienzo del nuevo milenio crean una nueva empresa llamada RADISTOR S.A.
<br><br>
Este período de esplendor se caracterizó por la incorporación de maquinaria europea de nivel tope tan alto en su calidad, como en su producción, que nos capacitó para afrontar las exigencias de mercados más competitivos. La llegada de tecnología moderna y personal técnico conduce a nuestra empresa a diversificar los mercados convirtiendo a nuestra planta en productora de “TODO TIPO DE TORNILLERÍA”.


imagen-1.png


imagen-2.png
--}}