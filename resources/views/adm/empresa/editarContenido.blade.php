@extends('adm.main')

@section('titulo', 'Editar contenido de empresa')

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
			{!!Form::model($empresa, ['route'=>['empresa.contenido.update', $empresa->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo Spanish')!!}
						{!!Form::text('titulo_es', $empresa->titulo_es, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en', $empresa->titulo_en, ['class'=>'validate'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br', $empresa->titulo_br, ['class'=>'validate'])!!}
				    </div>
				</div>								
				<div class="row">
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto Spanish</span>
						{!!Form::textarea('texto_es', $empresa->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto English</span>
						{!!Form::textarea('texto_en', $empresa->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto Portugues</span>
						{!!Form::textarea('texto_br', $empresa->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>								
				<div class="row">
					<div class="file-field input-field col s6">
					    <div class="btn">
					        <span>Imagen Principal</span>
					        {!! Form::file('imagen') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',$empresa->imagen, ['class'=>'file-path validate']) !!}
					    </div>
					</div>
					<div class="file-field input-field col s6">
					    <div class="btn">
					        <span>Imagen Secundario</span>
					        {!! Form::file('imagen2') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',$empresa->imagen2, ['class'=>'file-path validate']) !!}
					    </div>
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