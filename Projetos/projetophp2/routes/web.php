<?php

use Illuminate\Support\Facades\Route;

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

//Rotas Modelo (Exemplos)
    Route::prefix('usuarios')->group(function(){
        Route::get('',function(){
            return 'Usuário';
        });
        Route::get('/{id}', function($id){
            return 'Mostrar detalhes usuário ' .$id;
        });
        Route::get('/{id}/tags', function($id){
            return 'Tags do usuario ' . $id;
        });
    });

    Route::get('/users/{paramA}/{paramB}', function ($paramA,$paramB){
        return 'Parametros: '.$paramA. '-' .$paramB;
    });

    Route::get('/users/{id}', function ($id){
        return 'Id Usuario: '.$id;
    });

    Route::get('/abc/{id?}', function ($id){
        return 'Sem parâmetro: '.$id;
    });

    /*Route::get('/', function () {
        return view('welcome');
    });*/

//Rotas Controller
    Route::get('/', 'App\Http\Controllers\PrimeiroController@hello');
