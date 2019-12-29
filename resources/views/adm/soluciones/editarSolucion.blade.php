@extends('adm.main')

@section('titulo', 'Editar Solucion a Medida')

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
			{!!Form::model($solucion, ['route'=>['solucion.update', $solucion->id], 'method'=>'PUT', 'files' => true])!!}
        <div class="row">
          <div class="input-field col s12">
            {!!Form::label('Titulo Spanish')!!}
            {!!Form::text('titulo_es',$solucion->titulo_es,['class'=>'validate'])!!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            {!!Form::label('Titulo English')!!}
            {!!Form::text('titulo_en',$solucion->titulo_en,['class'=>'validate'])!!}
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            {!!Form::label('Titulo Portugues')!!}
            {!!Form::text('titulo_br',$solucion->titulo_br,['class'=>'validate'])!!}
          </div>
        </div>                
        <div class="row">
        <div class="file-field input-field col s12">
              <div class="btn">
                  <span>Imagen</span>
                  {!! Form::file('imagen') !!}
              </div>
              <div class="file-path-wrapper">
                  {!! Form::text('',$solucion->imagen, ['class'=>'file-path validate']) !!}
              </div>
          </div>
        </div>
        <div class="row">         
          <div class="input-field col s12">
            <span style="color: gray;">Descripcion Spanish</span>
            {!!Form::textarea('descripcion_es', $solucion->descripcion_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
          </div>
        </div>
        <div class="row">         
          <div class="input-field col s12">
            <span style="color: gray;">Descripcion English</span>
            {!!Form::textarea('descripcion_en', $solucion->descripcion_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
          </div>
        </div>
        <div class="row">         
          <div class="input-field col s12">
            <span style="color: gray;">Descripcion Portugues</span>
            {!!Form::textarea('descripcion_br', $solucion->descripcion_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
          </div>
        </div>                
				{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('descripcion_es');
  CKEDITOR.replace('descripcion_en');
  CKEDITOR.replace('descripcion_br');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
@endsection