@extends('adm.main')

@section('titulo', 'Editar Categoria')

@section('cuerpo')

<main>
  <div class="container">
      @if(count($errors) > 0)
    <div class="col s12 card-panel red lighten-4 red-text text-darken-4">
        <ul>
          @foreach($errors->all() as $error)
            <li>{!!$error!!}</li>
          @endforeach
        </ul>
      </div>
    @endif
    @if(session('success'))
    <div class="col s12 card-panel green lighten-4 green-text text-darken-4">
      {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col s12">
      {!!Form::model($correo, ['route'=>['correo.update', $correo->id], 'method'=>'PUT', 'files' => true])!!}
        <div class="row">
          <div class="input-field col s8">
            {!!Form::label('Titulo')!!}
            {!!Form::text('titulo',$correo->titulo,['class'=>'validate', 'required'])!!}
          </div>
          <div class="input-field col s4">
            {!!Form::label('Orden')!!}
            {!!Form::text('orden',$correo->orden,['class'=>'validate', 'required'])!!}
          </div>  
        </div>
        <div class="row">
          <div class="input-field col s12">
            {!!Form::label('Texto')!!}
            {!!Form::text('texto',$correo->texto,['class'=>'validate', 'required'])!!}
          </div>  
        </div>
        {!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
      {!!Form::close()!!} 
      </div>
    </div>
  </div>
</main>
@endsection