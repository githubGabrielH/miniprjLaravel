<?php

use Illuminate\Support\Facades\Route;
use App\Models\Livro;

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

Route::get('/', function () {
    return view('welcome');
    Route::get('/livros', [Livro::class, 'index']);
 
Route::get('/livros/adicionar', [Livro::class, 'adicionar']);
 
Route::post('/livros', [Livro::class, 'store']);
});
