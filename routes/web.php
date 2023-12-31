<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DistribuidoresController;
use App\Http\Controllers\PuntuacionesController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\TriviaController;
use App\Http\Controllers\Frontend\PageFrontController;


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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	Route::group(['middleware' => ['Administrador']], function () {
		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
		Route::group(['prefix' => 'distribuidores'], function(){
			Route::get('index', 			[DistribuidoresController::class, 'index']);
			Route::get('getlist', 			[DistribuidoresController::class, 'listDistribuidores']);
			Route::get('getalias', 			[DistribuidoresController::class, 'listAlias']);
			Route::put('desactivar', 		[DistribuidoresController::class, 'desactivar']);
			Route::post('store', 			[DistribuidoresController::class, 'store']);
			Route::put('update', 			[DistribuidoresController::class, 'update']);
			Route::get('ruta_proyecto', 	[DistribuidoresController::class, 'ruta']);
		});

		Route::group(['prefix' => 'listpostulaciones'], function(){
			Route::get('index', 			[PuntuacionesController::class, 'index']);
			Route::get('getlistDist', 		[PuntuacionesController::class, 'getlistDist']);
			Route::get('getlistpuntuacion', [PuntuacionesController::class, 'getlistpuntuacion']);
			Route::post('store', 			[PuntuacionesController::class, 'store']);
			Route::get('ruta_proyecto', 	[PuntuacionesController::class, 'ruta']);
		});

		Route::group(['prefix' => 'caledanrio'], function(){
			Route::get('index', 			[CalendarController::class, 'index']);
			Route::get('show-events', 		[CalendarController::class, 'calendarEvents']);
			Route::post('store', 		    [CalendarController::class, 'store']);
			Route::get('ruta_proyecto', 	[CalendarController::class, 'ruta']);
		});

		Route::group(['prefix' => 'excel'], function(){
			Route::get('index', 			[ExcelController::class, 'view']);
			Route::post('import', 			[ExcelController::class, 'import']);
			Route::get('export', 			[ExcelController::class, 'export']);
			Route::get('ruta_proyecto', 	[ExcelController::class, 'ruta']);
		});

		Route::group(['prefix' => 'listpostulacionesmensual'], function(){
			Route::get('index', 			[PuntuacionesController::class, 'viewMensual']);
			Route::get('listposicionmes', 	[PuntuacionesController::class, 'listposicionmes']);

		});

		// Route::group(['prefix' => 'trivia'], function(){
		// 	Route::get('index', 				[TriviaController::class, 'viewtribia']);
		// 	Route::post('store', 				[TriviaController::class, 'store']);
		// 	Route::get('getFormularios',     	[TriviaController::class, 'getFormularios']);
		// 	Route::post('storePregunta',     	[TriviaController::class, 'storePregunta']);
		// 	Route::get('getPreguntas',     	    [TriviaController::class, 'getPreguntas']);
		// 	Route::post('storeOpciones',     	[TriviaController::class, 'storeOpciones']);
		// 	Route::get('getDatos',     			[TriviaController::class, 'getDatos']);
		// 	Route::get('getPreguntasForm',     	[TriviaController::class, 'getPreguntasForm']);
		// 	Route::get('getPreguntasOpciones', 	[TriviaController::class, 'getPreguntasOpciones']);
		// 	Route::get('respuestas', 			[TriviaController::class, 'viewRespuestas']);	

		// 	Route::put('updateForm',			[TriviaController::class, 'updateForm']);	
		// 	Route::put('updatePregunta',		[TriviaController::class, 'updatePregunta']);
		// 	Route::put('updateOpciones',		[TriviaController::class, 'updateOpciones']);


		// 	Route::put('deleteForm',			[TriviaController::class, 'deleteForm']);	
		// 	Route::put('deletePregunta',		[TriviaController::class, 'deletePregunta']);
		// 	Route::put('deleteOpciones',		[TriviaController::class, 'deleteOpciones']);

		// 	Route::post('storeRespuesta',		[TriviaController::class, 'storeRespuesta']);
		// });

		Route::group(['prefix' => 'trivia/respuestas'], function(){			
			Route::get('getFormulariosfrom',     	[TriviaController::class, 'getFormulariosfrom']);
			Route::get('getPreguntasfront',         [TriviaController::class, 'getPreguntasfront']);
			Route::post('storeRespuestas',     		[TriviaController::class, 'storeRespuestas']);
			Route::get('validacionRespuestas',    	[TriviaController::class, 'validacionRespuestas']);
			
		});

	});

	Route::group(['middleware' => ['Distribuidor']], function () {
		
		Route::group(['prefix' => 'distribuidor'], function(){
			Route::get('index', 			[PuntuacionesController::class, 'viewMensualDis']);
		});
	
	});
});





// Route::group(['middleware' => ['guest']], function () {

	Route::get('/', 			[PageFrontController::class, 'index']);
	Route::get('objetivos', 	[PageFrontController::class, 'objetivos']);
	Route::get('productos', 	[PageFrontController::class, 'productos']);
	Route::get('premios', 		[PageFrontController::class, 'premios']);
	Route::get('receta', 		[PageFrontController::class, 'receta']);
	Route::get('aprende', 		[PageFrontController::class, 'aprende']);
	Route::get('tiempos', 		[PageFrontController::class, 'tiempos']);
	Route::get('bases', 		[PageFrontController::class, 'bases']);
	Route::get('eventos', 		[PageFrontController::class, 'eventos']);

	Route::get('getalias', 		[PageFrontController::class, 'listAlias']);
	Route::post('store', 		[PageFrontController::class, 'store']);
	Route::get('loginview', 	[PageFrontController::class, 'loginview']);
	
// });










