<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppEdiles\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
//Route::post('/login', [AppLoginController::class,'login']);

Route::post('register', 'App\Http\Controllers\AppEdiles\UserController@register');
Route::post('login', 'App\Http\Controllers\AppEdiles\UserController@authenticate');


Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('user','App\Http\Controllers\AppEdiles\UserController@getAuthenticatedUser');

    Route::get('comuna','App\Http\Controllers\AppEdiles\AppComunaController@getComuna');


    Route::get('corregimiento','App\Http\Controllers\AppEdiles\AppCorregimientoController@getCorregimiento');


    Route::post('barrio','App\Http\Controllers\AppEdiles\AppBarrioController@getBarrio');

    
    Route::post('vereda','App\Http\Controllers\AppEdiles\AppVeredaController@getVereda');


    Route::get('genero','App\Http\Controllers\AppEdiles\AppSetingsController@getGenero');

    Route::post('obrasByComuna','App\Http\Controllers\AppEdiles\AppObrasController@getObrasByComuna');
    Route::post('obrasByBarrio','App\Http\Controllers\AppEdiles\AppObrasController@getObrasByBarrio');
    Route::post('obrasByVereda','App\Http\Controllers\AppEdiles\AppObrasController@getObrasByVereda');
    Route::post('obrasByCorregimiento','App\Http\Controllers\AppEdiles\AppObrasController@getObrasByCorregimiento');


    Route::post('votarObra','App\Http\Controllers\AppEdiles\AppObrasController@votarObra');

});
