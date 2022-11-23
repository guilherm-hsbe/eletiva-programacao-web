<?php

use Illuminate\Support\Facades\Route;

    //Caminho dos Controllers
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoManagerController;
use App\Http\Controllers\ContatosManagerController;

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

    //Rotas acessando Views (se não utilizar controllers)
/*
Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('site.cursos');
})->name('site.cursos');

Route::get('/contatos', function () {
    return view('site.contatos');
})->name('site.contatos');
*/

/*
|--------------------------------------------------------------------------|
*/

    //Rotas acessando Controllers (se utilizando controllers)
Route::get('/',[HomeController::class,'index'])->name('site.home');

    //Rotas cursos
Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

    //Rotas para ambos métodos get/post dos contatos
Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');
Route::post('/contatos', [ContatosController::class, 'store'])->name('site.contatos');

    //Instruções para criação/alteração/exclusão de propriedades de cursos
Route::resource('cursosmanager', CursoManagerController::class);

    //Instruções para criação/alteração/exclusão de propriedades de contatos
Route::resource('contatosmanager', ContatosManagerController::class);