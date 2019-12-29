@extends('adm.main')

@section('titulo', 'Crear Categoria')

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
			{!!Form::open(['route'=>'categoria.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',null, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Titulo Spanish')!!}
						{!!Form::text('titulo_es',null,['class'=>'validate'])!!}
					</div>
				</div>		
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',null,['class'=>'validate'])!!}
					</div>
				</div>	
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Titulo Portugués')!!}
						{!!Form::text('titulo_br',null,['class'=>'validate'])!!}
					</div>
				</div>											

				<div class="col s12 no-padding">
					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
			{!!Form::close()!!} 
		</div>
		</div>
	</div>
</main>

@endsection

