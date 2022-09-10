<?php

use Illuminate\Support\Facades\Route;

    //Caminho dos Controllers
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;

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

Route::get('/cursos', [CursosController::class, 'index'])->name('site.cursos');

Route::get('/contatos', [ContatosController::class, 'index'])->name('site.contatos');