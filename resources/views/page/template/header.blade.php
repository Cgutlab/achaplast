<div class="hide-on-med-and-down" style="width: 100%; background: #EBEBEB;">

  <div class="container cero" style="width: 84%;" align="right">   

    <img class="responsive-img iconos" src="{{asset('imagenes/help/telefono.png')}}">

    <span class="Roboto gris10 fs15 fw5" style="vertical-align: middle;">{{$telefono->texto}}</span>

    <a href="{{route('busca')}}">

      <img class="responsive-img iconos" src="{{asset('imagenes/help/buscador.png')}}">

    </a>

    @foreach($redes as $rede)

      <a href="{{($rede->ruta)}}">

        <img class="responsive-img iconos" src="{{asset('imagenes/redes/'.$rede->imagen)}}">

      </a>

    @endforeach
    <a href="{{ url('idioma/es') }}" class="idiomas @if($idioma == 'es') idiomasActive @endif">ES</a>
    <a href="{{ url('idioma/en') }}" class="idiomas @if($idioma == 'en') idiomasActive @endif" style="padding-left: 7px; padding-right: 7px;">EN</a>
    <a href="{{ url('idioma/br') }}" class="idiomas @if($idioma == 'br') idiomasActive @endif">BR</a>
  </div>

</div>



<nav class="header z-depth-0" style="border-top: 1px solid #DDDDDD; height: 142px; padding: 0;">

<div class="nav-wrapper Roboto gris11" style="border-bottom: 1px solid #DDDDDD; padding: 0;">

<div class="container" style="width: 84%;">

  <div class="row">

      <a href="#" data-target="mobile-demo" class="sidenav-trigger right" style="margin: 40px 0 50px 0px; padding: 0 10px 0 10px; border: 1px solid #DDDDDD"><i class="material-icons">menu</i></a>

  <div class="col l3">

    <div class="row">
      
      <a href="{{route('index')}}">
        <img class="left responsive-img hide-on-small-only" style="max-height: 120px; margin: 1px; padding-top: 20px;" src="{{asset('imagenes/logos/'.$header->imagen)}}">
        <img class="hide-on-med-and-up show-on-small" style="position: absolute; max-height: 90px; margin: 1px; padding-top: 20px;" src="{{asset('imagenes/logos/'.$header->imagen)}}">
      </a>

    </div>  

  </div>

  <div class="col l9 hide-on-med-and-down" align="right">

    <div class="row fw5" align="right">

      <div class="offset-l2 col l2" style="margin-top: 39px;">
        <a href="{{route('empresax')}}" style="color: inherit;">
        @if($active == 'empresa')
        <span class="lheader_active center mayus">@lang('general.empresa')</span>
        @else
        <span class="lheader center mayus">@lang('general.empresa')</span>
        @endif
        </a>
      </div>

      <div class="col l2" style="margin-top: 39px;">
        <a href="{{route('achaplasts')}}" style="color: inherit;">
        @if($active == 'achaplasts')
        <span class="lheader_active center mayus">@lang('general.productos')</span>
        @else
        <span class="lheader center mayus">@lang('general.productos')</span>
        @endif
        </a> 
      </div>

      <div class="col l2" style="margin-top: 39px;">
        <a href="{{route('matriceria')}}" style="color: inherit;">
        @if($active == 'matriceria')
        <span class="lheader_active center mayus">@lang('general.matriceria')</span>
        @else
        <span class="lheader center mayus">@lang('general.matriceria')</span>
        @endif
        </a> 
      </div>

      <div class="col l2" style="margin-top: 39px;">  
        <a href="{{route('novedades')}}" style="color: inherit;">
        @if($active == 'novedades')
        <span class="lheader_active center mayus">@lang('general.novedades')</span>
        @else
        <span class="lheader center mayus">@lang('general.novedades')</span>
        @endif
        </a>   
      </div>

      <div class="col l2" style="margin-top: 39px;">  
        <a href="{{route('contacto')}}" style="color: inherit;">
        @if($active == 'contacto')
        <span class="lheader_active center mayus">@lang('general.contacto')</span>
        @else
        <span class="lheader center mayus">@lang('general.contacto')</span>
        @endif
        </a>   
      </div>

    </div>

  </div>

</div>

</div>

</div>

</nav>



<div>

  <ul class="sidenav" id="mobile-demo">

    <li>

      <a href="{{route('index')}}">

        @if($active == 'home')

        <b>HOME</b>

        @else

        HOME

        @endif

      </a>

    </li>

    <li>

      <a href="{{route('busca')}}">

        @if($active == 'busca')

        <b>BUSCAR</b>

        @else

        BUSCAR

        @endif

      </a>

    </li>     

    <li>

      <a href="{{route('empresax')}}">

        @if($active == 'empresa')

        <b>EMPRESA</b>

        @else

        EMPRESA

        @endif

      </a>

    </li>

    <li>

      <a href="{{route('achaplasts')}}">

        @if($active == 'achaplasts')

        <b>PRODUCTOS</b>

        @else

        PRODUCTOS

        @endif

      </a>

    </li>

    <li>

      <a href="{{route('matriceria')}}">

        @if($active == 'matriceria')

        <b>MATRICERIA</b>

        @else

        MATRICERIA

        @endif

      </a>

    </li>    

    <li>

      <a href="{{route('novedades')}}">

        @if($active == 'novedades')

        <b>NOVEDADES</b>

        @else

        NOVEDADES

        @endif

      </a>

    </li>     

    <li>

      <a href="{{route('contacto')}}">

        @if($active == 'contacto')

        <b>CONTACTO</b>

        @else

        CONTACTO

        @endif

      </a>

    </li>     

  </ul>

</div>