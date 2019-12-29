@extends('adm.main')

@section('titulo', 'Editar contenido de contenido')

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
			{!!Form::model($contenido, ['route'=>['home.contenido.update', $contenido->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo Spanish')!!}
						{!!Form::text('titulo_es', $contenido->titulo_es, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en', $contenido->titulo_en, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br', $contenido->titulo_br, ['class'=>'validate'])!!}
				    </div>
				</div>								
				<div class="row">
			      	<div class="input-field col s12">
			      	<span style="color: gray;">Texto Spanish</span>
						{!!Form::textarea('texto_es', $contenido->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>	
				<div class="row">
			      	<div class="input-field col s12">
			      	<span style="color: gray;">Texto English</span>
						{!!Form::textarea('texto_en', $contenido->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      	<span style="color: gray;">Texto Portugues</span>
						{!!Form::textarea('texto_br', $contenido->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
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