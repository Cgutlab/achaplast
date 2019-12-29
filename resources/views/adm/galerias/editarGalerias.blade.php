@extends('adm.main')



@section('titulo', 'Editar Galerias')



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

				<table class="highlight bordered">

				<thead>

					<td>Titulo</td>

					<td>Orden</td>

					<td class="text-right">Acciones</td>

				</thead>

				<tbody>

				@foreach($galerias as $galeria)

					<tr>

						<td>{!! $galeria->titulo !!}</td>

						<td>{!! $galeria->orden !!}</td>

						<td class="text-right">

							<a href="{{ route('galeria.edit',$galeria->id) }}"><i title="Editar" class="material-icons">create</i></a>
              				{!!Form::open(['class'=>'en-linea', 'route'=>['galeria.destroy', $galeria->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}
								<button onclick='return confirm_delete(this);' type="submit" class="submit-button">
									<i title="Eliminar" class="material-icons red-text">cancel</i>
								</button>
							{!!Form::close()!!}

						</td>

					</tr>

				@endforeach

				</tbody>

			</table>			

			</div>

		</div>

		{!! $galerias->render() !!}

    </div>

</main>


<script type="text/javascript">
function confirm_delete() {
var result = confirm('¿Esta Seguro Que Deseas Eliminar La Categoria?');

if (result) {
        return true;
    } else {
        return false;
    }
}
</script>



@endsection