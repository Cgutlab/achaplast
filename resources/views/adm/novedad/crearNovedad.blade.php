@extends('adm.main')

@section('titulo', 'Crear novedad')

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
					{!! Form::open(['route'=>'novedades.store', 'method'=>'POST', 'files' => true]) !!}
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título Spanish') !!}
								{!! Form::text('title_es', null, ['class'=>'validate']) !!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título English') !!}
								{!! Form::text('title_en', null, ['class'=>'validate']) !!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('title','Título Portugues') !!}
								{!! Form::text('title_br', null, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<br>											
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo Spanish') !!}
								{!! Form::text('subtitle_es', null, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo English') !!}
								{!! Form::text('subtitle_en', null, ['class'=>'validate']) !!}
						    </div>
						</div>	
						<div class="row">
					      	<div class="input-field col s12">
					      		{!! Form::label('subtitle','Subtítulo Portugués') !!}
								{!! Form::text('subtitle_br', null, ['class'=>'validate']) !!}
						    </div>
						</div>		
						<br>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto Spanish</span>
								{!!Form::textarea('text_es', null, ['class'=>'validate'])!!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto English</span>
								{!!Form::textarea('text_en', null, ['class'=>'validate'])!!}
						    </div>
						</div>
						<div class="row">
					      	<div class="input-field col s12">
					      	<span style="color: gray;">Texto Portugués</span>
								{!!Form::textarea('text_br', null, ['class'=>'validate'])!!}
						    </div>
						</div>												
							<div class="input-field col s6">
								{!! Form::label('date','Fecha') !!}
								{!! Form::text('date',null,['class'=>'datepicker', 'required', 'placeholder' => '31-12-2018']) !!}
							</div>
							<div class="input-field col s6">
								{!! Form::label('order','Orden') !!}
								{!! Form::text('order',null,['class'=>'validate', 'required']) !!}
							</div>
						<div class="row">
							<div class="file-field input-field col s6">
								<div class="btn">
								    <span>Imagen</span>
								    {!! Form::file('image') !!}
								</div>
								<div class="file-path-wrapper">
								    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
								</div>
								<small>.</small>
							</div>
							<div class="file-field input-field col s6">
								<div class="btn">
								    <span>Ficha</span>
								    {!! Form::file('route') !!}
								</div>
								<div class="file-path-wrapper">
								    {!! Form::text('',null, ['class'=>'file-path validate']) !!}
								</div>
								<small>.</small>
							</div>
						<div class="col s12 no-padding">
							{!! Form::submit('Crear', ['class'=>'waves-effect waves-light btn right']) !!}
						</div>
					</div>
					{!! Form::close() !!} 
				</div>
			</div>
		</div>
	</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('text_es');
	CKEDITOR.replace('text_en');
	CKEDITOR.replace('text_br');
	CKEDITOR.config.height = '300px';
	CKEDITOR.config.width = '100%';
</script>
@endsection