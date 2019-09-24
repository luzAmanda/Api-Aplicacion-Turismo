<?php

use Illuminate\Http\Request;

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

Route::post('register', 'API\RegisterController@register');

  

//Route::middleware('auth:api')->group( function () {

    Route::get('tiposNegocio', 'API\TnegocioController@index1');
    Route::get('negocios', 'API\TnegocioController@index2');
    Route::get('negociosPorTipo/{id}', 'API\TnegocioController@show');
    Route::get('sucursalporId/{id}', 'API\SucursalController@show');
    Route::get('categoriasporIdSucursal/{id}', 'API\SucursalController@show2');
    Route::get('categorias', 'API\TnegocioController@index');
    
    Route::get('sucursal-categorias/{id}', 'API\SucursalDetalleController@show');
    Route::get('detallesporIdCategoria/{id}', 'API\CategoriaController@show');
  //  Route::get('detallesporIdCategoria/{id}', 'API\CategoriaDetalleController@show');
 //   Route::get('detalleporIdCategoria/{id}', 'API\SucursalcategoriaController@show1');
 Route::get('sectores', 'API\SectorController@index');  
 Route::get('tiposNegocioPorIdSector/{id}', 'API\SectorController@show');    


//});


Route::get('/opinion','ApiOpinionController@create');
Route::get('/sucursal','ApiSucursalController@show');
Route::get('/sucursal-menu/{id}','ApiSucursalMenuController@show');
Route::get('/sucursal-negocio','ApiSucursalNegocioController@show');



