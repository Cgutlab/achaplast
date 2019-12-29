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
<main class="novedades">
  <div class="container mt50 mb50">
      <div class="row">
        @foreach($novedades as $novedad)
          <div class="col s12 m4">
            <a href="{{ route('novedad',$novedad->id)}}" class="gris-oscuro">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="{{ asset('imagenes/novedades/'.$novedad->image) }}">
                  <a class="btn-floating halfway-fab waves-effect waves-light"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content gris-oscuro fs16">
                <span class="card-title fs17 bold">{!! $novedad->{'title_'.$idioma} !!}</span>
                  {!! $novedad->{'text_'.$idioma} !!}
                </div>
              </div>
            </a>
          </div>
        @endforeach
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















