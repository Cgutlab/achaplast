@extends('adm.main')

@section('titulo', 'Editar destacado')

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
			{!!Form::model($destacado, ['route'=>['home.destacado.update', $destacado->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
			      	<div class="input-field col s12">
			      	<label class="col s12" for="titulo">Titulo Spanish</label>
						{!!Form::text('titulo_es', $destacado->titulo_es, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      	<label class="col s12" for="titulo">Titulo English</label>
						{!!Form::text('titulo_en', $destacado->titulo_en, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      	<label class="col s12" for="titulo">Titulo Portugues</label>
						{!!Form::text('titulo_br', $destacado->titulo_br, ['class'=>'validate'])!!}
				    </div>
				</div>								
				<div class="row">
			      	<label class="col s12" for="ruta">Ruta</label>
			      	<div class="input-field col s12">
						{!!Form::text('ruta', $destacado->ruta, ['class'=>'validate'])!!}
				    </div>
				</div>				
				<div class="row">
			      	<label class="col s12" for="texto">Texto Spanish</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('texto_es', $destacado->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>	
				<div class="row">
			      	<label class="col s12" for="texto">Texto English</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('texto_en', $destacado->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">
			      	<label class="col s12" for="texto">Texto Portugues</label>
			      	<div class="input-field col s12">
						{!!Form::textarea('texto_br', $destacado->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>								
				<div class="row">
					<div class="file-field input-field col s8">
					    <div class="btn">
					        <span>Imagen</span>
					        {!! Form::file('imagen') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',$destacado->imagen, ['class'=>'file-path validate']) !!}
					    </div>
					</div>				
					<div class="input-field col s4">
							{!!Form::label('Orden')!!}
							{!!Form::text('orden',$destacado->orden,['class'=>'validate'])!!}
					</div>
				</div>
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto_es');
	CKEDITOR.replace('texto_en');
	CKEDITOR.replace('texto_br');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection