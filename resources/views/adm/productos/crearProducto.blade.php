@extends('adm.main')



@section('titulo', 'Crear Producto')



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

			{!!Form::open(['route'=>'producto.store', 'method'=>'POST', 'files' => true])!!}

		<div class="row">

          <div class="file-field input-field col s6">

            <div class="btn">

                <span>Imagen</span>

                {!! Form::file('imagen') !!}

            </div>

            <div class="file-path-wrapper">

                {!! Form::text('',null, ['class'=>'file-path validate', 'required']) !!}

            </div>

          </div>

		<div class="file-field input-field col s6">

			<div class="btn">

			    <span>Ficha</span>

			    {!! Form::file('pdf') !!}

			</div>

			<div class="file-path-wrapper">

			    {!! Form::text('',null, ['class'=>'file-path validate', ]) !!}

			</div>

		</div>	

        </div>

        <div class="row">
        	
          <div class="file-field input-field col s6">

            <div class="btn">

                <span>Imagen</span>

                {!! Form::file('imagen1') !!}

            </div>

            <div class="file-path-wrapper">

                {!! Form::text('',null, ['class'=>'file-path validate']) !!}

            </div>

          </div>

          <div class="file-field input-field col s6">

            <div class="btn">

                <span>Imagen</span>

                {!! Form::file('imagen2') !!}

            </div>

            <div class="file-path-wrapper">

                {!! Form::text('',null, ['class'=>'file-path validate']) !!}

            </div>

          </div>          

        </div>

				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Titulo Spanish')!!}
						{!!Form::text('titulo_es',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<br>
				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Breve Spanish')!!}
						{!!Form::text('breve_es', null, ['class'=>'validate'])!!}
					</div>
				</div>
				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Breve English')!!}
						{!!Form::text('breve_en', null, ['class'=>'validate'])!!}
					</div>
				</div>
				<div class="row">					
					<div class="input-field col s12">
						{!!Form::label('Breve Portugues')!!}
						{!!Form::text('breve_br', null, ['class'=>'validate'])!!}
					</div>
				</div>
				<br>
				<div class="row">			    
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto Spanish</span>
						{!!Form::textarea('texto1_es', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">			    
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto English</span>
						{!!Form::textarea('texto1_en', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>
				<div class="row">			    
			      	<div class="input-field col s12">
			      		<span style="color: gray;">Texto Portugues</span>
						{!!Form::textarea('texto1_br', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
				    </div>
				</div>						

        <div class="row">

          <div class="input-field col s2">

            Seleccione una categoria:

          </div>

              <div class="input-field col s6">

            <select name="id_categoria" style="display: inherit;">

	            @foreach($categorias as $categoria)

	                  <option value="{{$categoria->id}}">{{$categoria->titulo_es}}</option>

	            @endforeach

	        </select>

          </div>

          <div class="input-field col s4">

			{!!Form::label('Orden')!!}

			{!!Form::text('orden',null,['class'=>'validate','required'])!!}

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

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto1_es');
	CKEDITOR.replace('texto1_en');
	CKEDITOR.replace('texto1_br');
    CKEDITOR.config.width = 300;
    CKEDITOR.config.width = '99%';
</script>

@endsection