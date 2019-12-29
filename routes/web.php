<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'idioma'], function() {
Route::post('contacto/enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'contacto.enviar']);
Route::post('servicio', ['uses' => 'page\ServicioController@validateCuenta', 'as' => 'cuenta.validarlogin']);

Route::get('/', function () {
    return view('page/home');
});	

	Route::get('idioma/{idioma}', 'IdiomaController@cambiarIdioma');

	Route::get('/', ['uses' => 'page\HomeController@index', 'as' => 'index']);

	Route::get('/busca',['uses'=>'page\BuscarController@index',	'as'=>'busca' ]);
	Route::post('/buscador',['uses'=>'page\BuscarController@getProducts', 'as'=>'buscador']);

	Route::get('empresa', ['uses' => 'page\EmpresaController@index', 'as' => 'empresax']);//usado
	Route::get('achaplasts', ['uses' => 'page\AchaplastsController@index', 'as' => 'achaplasts']);//usado
	Route::get('equipamiento', ['uses' => 'page\EquipamientoController@index', 'as' => 'equipamiento']);
	Route::get('servicios', ['uses' => 'page\ServicioController@index', 'as' => 'servicios']);
	Route::get('galeria', ['uses' => 'page\GaleriaController@index', 'as' => 'galeria']);
	Route::get('productos',  ['uses' => 'page\ProductosController@index', 'as' => 'productos']);
	Route::get('novedad/{id}', ['uses' => 'page\NovedadController@novedad', 'as' => 'novedad']);
	Route::get('novedades', ['uses' => 'page\NovedadController@index', 'as' => 'novedades']);
	
	Route::get('matriceria', ['uses' => 'page\MatriceriaController@index', 'as' => 'matriceria']);

  	Route::get('achaplast/{id}', ['uses' => 'page\AchaplastController@index', 'as' => 'achaplast']);
	Route::get('productot/{id}', ['uses' => 'page\ProductotController@index', 'as' => 'productot']);//usado

  	Route::get('adhesivos', ['uses' => 'page\AdhesivosController@index', 'as' => 'adhesivos']);
  	Route::get('adhesivo/{id}', ['uses' => 'page\AdhesivoController@index', 'as' => 'adhesivo']);
  	Route::get('aproducto/{id}', ['uses' => 'page\AProductoController@index', 'as' => 'aproducto']);//usado

	Route::get('filter/{id_categoria}', ['uses' => 'page\NovedadesController@filter', 'as' => 'filter']);
	Route::get('filter_novedades/{id}', ['uses' => 'page\NovedadesController@show', 'as' => 'filter_novedades']);
	Route::post('search', ['uses' => 'page\NovedadesController@buscar', 'as' => 'buscar_novedad']);

	Route::get('cliente', ['uses' => 'page\ClienteController@index', 'as' => 'cliente']);
	Route::get('descarga', ['uses' => 'page\DescargaController@index', 'as' => 'descarga']);
	Route::get('contacto', ['uses' => 'page\ContactoController@index', 'as' => 'contacto']);
	Route::post('enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'enviar']);
	Route::get('listas', ['uses' => 'page\ListasController@index', 'as' => 'listas']);

	Route::get('cuenta_c', ['uses' => 'page\CuentaController@createCuenta', 'as' => 'cuenta_c']);
	Route::post('cuenta_s', ['uses' => 'page\CuentaController@storeCuenta', 'as' => 'cuenta_s']);
	Route::get('cuenta_r', ['uses' => 'page\CuentaController@recuperarCuenta', 'as' => 'cuenta_r']);
	Route::post('cuenta_d', ['uses' => 'page\CuentaController@sendCuenta', 'as' => 'cuenta_d']);

	Route::group(['prefix' => 'adm'], function() {
		Route::resource('login', 'adm\LoginController');
		Route::get('logout', ['uses' => 'adm\LoginController@logout' , 'as' => 'adm.logout']);
	});

 });

	Route::group(['prefix' => 'adm', 'middleware' => 'guest'], function() {

	Route::get('/', function() {
		$usuario = Auth::user();
		return view('adm.index', compact('usuario'));
	});

	

    Route::resource('usuarios', 'adm\UserController');
	Route::resource('metadatos', 'adm\MetadatosController');
	Route::resource('datos', 'adm\DatosController');
	Route::resource('logos', 'adm\LogosController');
	Route::resource('slider', 'adm\SliderController');

	Route::group(['prefix' => 'home'], function() {
		Route::group(['prefix' => 'slider'], function() {
		Route::get('create', 'adm\HomeController@crearSlider');
		Route::get('show', 'adm\HomeController@editarSliders');
		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarSlider', 'as' => 'home.slider.edit']);
		});

	Route::group(['prefix' => 'destacado'], function() {
		Route::get('show', 'adm\HomeController@editarDestacados');
		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarDestacado', 'as' => 'home.destacado.edit']);
		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateDestacado', 'as' => 'home.destacado.update']);
		});
	Route::group(['prefix' => 'contenido'], function() {
		Route::get('show', 'adm\HomeController@editarContenidos');
		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarContenido', 'as' => 'home.contenido.edit']);
		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateContenido', 'as' => 'home.contenido.update']);
		});
	});

	Route::group(['prefix' => 'empresa', 'as' => 'empresa'], function() {
		Route::group(['prefix' => 'contenido'], function() {
		Route::get('edit', ['uses' => 'adm\EmpresaController@editarContenido', 'as' => '.contenido.edit']);
		Route::put('update/{id}', ['uses' => 'adm\EmpresaController@updateContenido', 'as' => '.contenido.update']);
			});	

		Route::group(['prefix' => 'slider'], function() {
		Route::get('create', 'adm\EmpresaController@crearSlider');
		Route::get('show', 'adm\EmpresaController@editarSliders');
		});
	});

	Route::group(['prefix' => 'equipamiento', 'as' => 'equipamiento'], function() {
		Route::group(['prefix' => 'contenido'], function() {
		Route::get('edit', ['uses' => 'adm\EquipamientoController@editarContenidos', 'as' => '.contenido.edit']);
		Route::put('update/{id}', ['uses' => 'adm\EquipamientoController@updateContenido', 'as' => '.contenido.update']);
		});	
	});



  Route::group(['prefix' => 'calidad', 'as' => 'calidad'], function() {
      Route::get('show', ['uses' => 'adm\CalidadController@showCalidad', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\CalidadController@editCalidad', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\CalidadController@updateCalidad', 'as' => '.update']);
    });

  Route::group(['prefix' => 'descarga', 'as' => 'descarga'], function() {
      Route::get('create', ['uses' => 'adm\DescargaController@createDescarga', 'as' => '.create']);
      Route::post('store', ['uses' => 'adm\DescargaController@storeDescarga', 'as' => '.store']);
      Route::get('show', ['uses' => 'adm\DescargaController@showDescarga', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\DescargaController@editDescarga', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\DescargaController@updateDescarga', 'as' => '.update']);
      Route::delete('destroy/{id}', ['uses' => 'adm\DescargaController@destroyDescarga', 'as' => '.destroy']);
    });


	Route::group(['prefix' => 'servicio', 'as' => 'servicio'], function() {
			Route::get('create', ['uses' => 'adm\ServicioController@createServicio', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\ServicioController@storeServicio', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\ServicioController@showServicio', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\ServicioController@editServicio', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\ServicioController@updateServicio', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\ServicioController@destroyServicio', 'as' => '.destroy']);
		});

	Route::group(['prefix' => 'novedades', 'as' => 'novedades'], function() {
			Route::get('create', ['uses' => 'adm\NovedadController@create', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\NovedadController@store', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\NovedadController@show', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\NovedadController@edit', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\NovedadController@update', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\NovedadController@destroy', 'as' => '.destroy']);
		});

  Route::group(['prefix' => 'redes', 'as' => 'redes'], function() {
      Route::get('create', ['uses' => 'adm\RedesController@createRedes', 'as' => '.create']);
      Route::post('store', ['uses' => 'adm\RedesController@storeRedes', 'as' => '.store']);
      Route::get('show', ['uses' => 'adm\RedesController@showRedes', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\RedesController@editRedes', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\RedesController@updateRedes', 'as' => '.update']);
      Route::delete('destroy/{id}', ['uses' => 'adm\RedesController@destroyRedes', 'as' => '.destroy']);
    });

	/* TEXTILES */
	Route::group(['prefix' => 'categoria', 'as' => 'categoria'], function() {
			Route::get('create', ['uses' => 'adm\CategoriaController@createCategoria', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\CategoriaController@storeCategoria', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\CategoriaController@showCategoria', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\CategoriaController@editCategoria', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\CategoriaController@updateCategoria', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaController@destroyCategoria', 'as' => '.destroy']);
		});

  /* TEXTILES */
	Route::group(['prefix' => 'producto', 'as' => 'producto'], function() {
			Route::get('create', ['uses' => 'adm\ProductoController@createProducto', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\ProductoController@storeProducto', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\ProductoController@showProducto', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\ProductoController@editProducto', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\ProductoController@updateProducto', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\ProductoController@destroyProducto', 'as' => '.destroy']);
		});

	/* ADHESIVOS */
	Route::group(['prefix' => 'acategoria', 'as' => 'acategoria'], function() {
			Route::get('create', ['uses' => 'adm\ACategoriaController@createACategoria', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\ACategoriaController@storeACategoria', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\ACategoriaController@showACategoria', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\ACategoriaController@editACategoria', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\ACategoriaController@updateACategoria', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\ACategoriaController@destroyACategoria', 'as' => '.destroy']);
		});

  /* ADHESIVOS */
	Route::group(['prefix' => 'aproducto', 'as' => 'aproducto'], function() {
			Route::get('create', ['uses' => 'adm\AProductoController@createAProducto', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\AProductoController@storeAProducto', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\AProductoController@showAProducto', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\AProductoController@editAProducto', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\AProductoController@updateAProducto', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\AProductoController@destroyAProducto', 'as' => '.destroy']);
		});
	
  /* CORREOS */
  Route::group(['prefix' => 'correo', 'as' => 'correo'], function() {
      Route::get('create', ['uses' => 'adm\CorreoController@createCorreo', 'as' => '.create']);
      Route::post('store', ['uses' => 'adm\CorreoController@storeCorreo', 'as' => '.store']);
      Route::get('show', ['uses' => 'adm\CorreoController@showCorreo', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\CorreoController@editCorreo', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\CorreoController@updateCorreo', 'as' => '.update']);
      Route::delete('destroy/{id}', ['uses' => 'adm\CorreoController@destroyCorreo', 'as' => '.destroy']);
    });

  /* SOLUCIONES A MEDIDA */
  Route::group(['prefix' => 'solucion', 'as' => 'solucion'], function() {
      /*
      Route::get('create', ['uses' => 'adm\SolucionController@createSolucion', 'as' => '.create']);
      Route::post('store', ['uses' => 'adm\SolucionController@storeSolucion', 'as' => '.store']);
      */
      Route::get('show', ['uses' => 'adm\SolucionController@showSolucion', 'as' => '.show']);
      Route::get('edit/{id}', ['uses' => 'adm\SolucionController@editSolucion', 'as' => '.edit']);
      Route::put('update/{id}', ['uses' => 'adm\SolucionController@updateSolucion', 'as' => '.update']);
    });

	Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {
			Route::get('create', ['uses' => 'adm\GaleriaController@createGaleria', 'as' => '.create']);
			Route::post('store', ['uses' => 'adm\GaleriaController@storeGaleria', 'as' => '.store']);
			Route::get('show', ['uses' => 'adm\GaleriaController@showGaleria', 'as' => '.show']);
			Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@editGaleria', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\GaleriaController@updateGaleria', 'as' => '.update']);
			Route::delete('destroy/{id}', ['uses' => 'adm\GaleriaController@destroyGaleria', 'as' => '.destroy']);
		});

	Route::group(['prefix' => 'cliente', 'as' => 'cliente'], function() {
		Route::group(['prefix' => 'contenido'], function() {
		Route::get('show', ['uses' => 'adm\ClienteController@showCliente', 'as' => '.contenido.show']);
		Route::put('update/{id}', ['uses' => 'adm\ClienteController@updateCliente', 'as' => '.contenido.update']);
		Route::delete('destroy/{id}', ['uses' => 'adm\ClienteController@destroyCliente', 'as' => '.destroy']);
		});	
	});

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
