@extends('adm.main')

@section('titulo', 'Editar novedad')

@section('cuerpo')

<main>
	<div class="container">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach ($errors->all() as $error)
	  				<li>{!! $error !!}</li>
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
			<div class="col-sm-12">
            {!! Form::model($novedad, ['route'=>['novedades.update', $novedad->id], 'method'=>'PUT', 'files' => true]) !!}
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título Spanish') !!}
								{!! Form::text('title_es', $novedad->title_es, ['class'=>'validate']) !!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título English') !!}
								{!! Form::text('title_en', $novedad->title_en, ['class'=>'validate']) !!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título Portugues') !!}
								{!! Form::text('title_br', $novedad->title_br, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<br>											
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo Spanish') !!}
								{!! Form::text('subtitle_es', $novedad->subtitle_es, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo English') !!}
								{!! Form::text('subtitle_en', $novedad->subtitle_en, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo Portugués') !!}
								{!! Form::text('subtitle_br', $novedad->subtitle_br, ['class'=>'validate']) !!}
						    </div>
						</div>		
						<br>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto Spanish</span>
								{!!Form::textarea('text_es', $novedad->text_es, ['class'=>'validate'])!!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto English</span>
								{!!Form::textarea('text_en', $novedad->text_en, ['class'=>'validate'])!!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto Portugués</span>
								{!!Form::textarea('text_br', $novedad->text_br, ['class'=>'validate'])!!}
						    </div>
						</div>												
							<div class="input-field col s6">
								{!! Form::label('date','Fecha') !!}
								{!! Form::text('date',$novedad->date,['class'=>'datepicker', 'required', 'placeholder' => '31-12-2018']) !!}
							</div>
							<div class="input-field col s6">
								{!! Form::label('order','Orden') !!}
								{!! Form::text('order',$novedad->order,['class'=>'validate', 'required']) !!}
							</div>
						<div class="row">
							<div class="file-field input-field col s6">
								<div class="btn">
								    <span>Imagen</span>
								    {!! Form::file('image') !!}
								</div>
								<div class="file-path-wrapper">
								    {!! Form::text('',$novedad->image, ['class'=>'file-path validate']) !!}
								</div>
								<small>.</small>
							</div>
							<div class="file-field input-field col s6">
								<div class="btn">
								    <span>Ficha</span>
								    {!! Form::file('route') !!}
								</div>
								<div class="file-path-wrapper">
								    {!! Form::text('',$novedad->route, ['class'=>'file-path validate']) !!}
								</div>
								<small>.</small>
							</div>
				<div class="col s12 no-padding">
					{!! Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right']) !!}
				</div>
			{!! Form::close() !!} 
			</div>
			</div>
		</div>
	</div>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('text_es');
	CKEDITOR.replace('text_en');
	CKEDITOR.replace('text_br');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection