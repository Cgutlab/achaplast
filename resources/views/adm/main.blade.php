<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de Administrador | @yield('titulo')</title>

    <!-- Materialize Core CSS -->
    <link href="{{ asset('css/materialize/materialize.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css')}}">


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style type="text/css">
.adm-estandar *{
font-size: 14px!important;
padding: 0;
margin: 0;
line-height: 20px
}
</style>
</head>
<body>

<!-- Menu derecho -->
<div class="row">
            <div id="nav-mobile" class="side-nav fixed col s3 z-depth-1" style="padding: 0; height: 100%; overflow-y: auto; position: fixed;" role="navigation">
                <img src="{{asset('imagenes/logos/header.png')}}" alt="" width="80%" style="margin:0 10%; border-radius: 20px;">
                    <ul class="collapsible z-depth-0">
                        <li class="bold" ><a class="collapsible-header <?php if(isset($destacados_seccion)){echo($destacados_seccion);} ?> waves-effect waves-admin"><i class="material-icons">home</i>Home</a>
                            <div class="collapsible-body">
                                <div class="<?php if(isset($home_slider_create)){echo($home_slider_create);} ?>"><a href="{{ url('adm/home/slider/create') }}">Crear slider</a></div>
                                <div class="<?php if(isset($home_slider_edit)){echo($home_slider_edit);} ?>"><a href="{{ url('adm/home/slider/show') }}">Editar slider</a></div>
                                <div class="<?php if(isset($destacados_edit)){echo($destacados_edit);} ?>"><a href="{{ url('adm/home/destacado/show') }}">Editar destacados</a></div>
                                <div class="<?php if(isset($contenidos_edit)){echo($contenidos_edit);} ?>"><a href="{{ url('adm/home/contenido/show') }}">Editar contenido</a></div>
                            </div>
                        </li>

                        <li class="bold"><a class="collapsible-header <?php if(isset($empresa_seccion)){echo($empresa_seccion);} ?> waves-effect waves-admin"><i class="material-icons">business</i>Empresa</a>
                            <div class="collapsible-body">                        
                                <div class="<?php if(isset($empresa_contenido_edit)){echo($empresa_contenido_edit);} ?>"><a href="{{ route('empresa.contenido.edit') }}">Editar contenido</a></div>
                            </div>
                        </li>

                        <li class="bold"><a class="collapsible-header <?php if(isset($categorias_seccion)){echo($categorias_seccion);} ?> waves-effect waves-admin"><i class="material-icons">style</i>Productos</a>
                            <div class="collapsible-body">                          
                                <div class="<?php if(isset($categorias_create)){echo($categorias_create);} ?>"><a href="{{ url('adm/categoria/create') }}">Crear categoria</a></div>
                                <div class="<?php if(isset($categorias_edit)){echo($categorias_edit);} ?>"><a href="{{ url('adm/categoria/show') }}">Editar categoria</a></div>
                                <div><a href="#"><i class="material-icons">shopping_cart</i>  Productos</a></div>
                                <div class="<?php if(isset($productos_create)){echo($productos_create);} ?>"><a href="{{ url('adm/producto/create') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crear producto</a></div>
                                <div class="<?php if(isset($productos_edit)){echo($productos_edit);} ?>"><a href="{{ url('adm/producto/show') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Editar producto</a></div>
                            </div>
                        </li>

                        <li class="bold"><a class="collapsible-header <?php if(isset($solucion_seccion)){echo($solucion_seccion);} ?> waves-effect waves-admin"><i class="tiny material-icons">build</i>Matricerías</a>
                            <div class="collapsible-body"> 
                                <div class="<?php if(isset($solucion_edit)){echo($solucion_edit);} ?>"><a href="{{ url('adm/solucion/show') }}">Editar contenido</a></div>
                            </div>
                        </li>    

                        <li class="bold"><a class="collapsible-header <?php if(isset($novedades_seccion)){echo($novedades_seccion);} ?> waves-effect waves-admin"><i class="material-icons">fiber_new</i>Novedades</a>
                            <div class="collapsible-body">              
                                <div class="<?php if(isset($novedades_create)){echo($novedades_create);} ?>"><a href="{{ url('adm/novedades/create') }}">Crear Novedad</a></div>
                                <div class="<?php if(isset($novedades_edit)){echo($novedades_edit);} ?>"><a href="{{ url('adm/novedades/show') }}">Editar Novedad</a></div>
                            </div>          
                        </li>

<!--                     
                         <li class="bold"><a class="collapsible-header <?php if(isset($equipamiento_seccion)){echo($equipamiento_seccion);} ?> waves-effect waves-admin"><i class="material-icons">build</i>Equipamiento</a>
                            <div class="collapsible-body">
                                <div class="<?php if(isset($equipamiento_contenido_edit)){echo($equipamiento_contenido_edit);} ?>"><a href="{{ route('equipamiento.contenido.edit') }}">Editar contenido</a></div>
                            </div>
                        </li>
 -->

                        <li class="bold"><a class="collapsible-header <?php if(isset($redes_seccion)){echo($redes_seccion);} ?> waves-effect waves-admin"><i class="material-icons">remove_red_eye</i>Redes sociales</a>
                            <div class="collapsible-body">              
                                <div class="<?php if(isset($redes_create)){echo($redes_create);} ?>"><a href="{{ url('adm/redes/create') }}">Crear red social</a></div>
                                <div class="<?php if(isset($redes_edit)){echo($redes_edit);} ?>"><a href="{{ url('adm/redes/show') }}">Editar red social</a></div>
                            </div>          
                        </li>

                        <li class="bold"><a class="collapsible-header <?php if(isset($logos_seccion)){echo($logos_seccion);} ?> waves-effect waves-admin"><i class="material-icons">collections</i>Logos</a>  
                            <div class="collapsible-body">            
                                <div class="<?php if(isset($logos_edit)){echo($logos_edit);} ?>"><a href="{{ url('adm/logos') }}">Editar logos</a>
                            </div>
                        </li>
                   
                        <li class="bold"><a class="collapsible-header <?php if(isset($datos_seccion)){echo($datos_seccion);} ?> waves-effect waves-admin"><i class="tiny material-icons">view_headline</i>Datos de la empresa</a>
                            <div class="collapsible-body"> 
                                <div class="<?php if(isset($datos_edit)){echo($datos_edit);} ?>"><a href="{{ url('adm/datos') }}">Editar datos</a></div>
                            </div>
                        </li>
                   
                        <li class="bold"><a class="collapsible-header <?php if(isset($metadatos_seccion)){echo($metadatos_seccion);} ?> waves-effect waves-admin"><i class="material-icons">pin_drop</i>Metadatos</a>
                            <div class="collapsible-body">
                                <div class="<?php if(isset($metadatos_edit)){echo($metadatos_edit);} ?>"><a href="{{ url('adm/metadatos') }}">Editar Metadatos</a></div>
                            </div>
                        </li>
                 
                         <li class="bold"><a class="collapsible-header <?php if(isset($usuarios_seccion)){echo($usuarios_seccion);} ?> waves-effect waves-admin"><i class="material-icons">account_circle</i>Usuarios</a>
                            <div class="collapsible-body">
                                <div class="<?php if(isset($usuarios_create)){echo($usuarios_create);} ?>"><a href="{{ url('adm/usuarios/create') }}">Crear Usuario</a></div>
                                <div class="<?php if(isset($usuarios_edit)){echo($usuarios_edit);} ?>"><a href="{{ url('adm/usuarios') }}">Editar Usuario</a></div>
                            </div>
                        </li>
                    </ul>
            </div>

    <div id="page-wrapper">
        <nav class="z-depth-0 col s9 push-s3" style="padding: 0;">
            <div class="nav-wrapper nave ">
                <ul class="right hide-on-med-and-down" style="margin: 0 10%;">
                    <li><a class="dropdown-trigger" href="{{route('adm.logout')}}" data-target="dropdown1">Cerrar Sesión</a></li>
                </ul>
            </div>
        </nav>
            <div class="col s9 push-s3" style="padding: 40px;">
                @yield('cuerpo')
            </div>                             
    </div>
</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery.min.js')}}"></script>

    <!-- Materialize Core JavaScript -->
    <script src="{{ asset('js/materialize/materialize.min.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function()
    {
        $('.collapsible').collapsible();
    });
    </script>
</body>
</html>

