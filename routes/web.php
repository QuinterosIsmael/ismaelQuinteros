<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('articulos.articles');
// });



// Route::get('/welcome', function() {
//     return 'Hola mundo desde welcome';
// });

// Route::get('/welcome2', function() {
//     return 'Hola mundo desde welcome2';
// });

// Route::get('/saludar/{name}/{lastName}', function ($name,$lastName){
//     return 'Hola ' . $name . ' ' . $lastName;
// });

// Route::get('index', [HomeController::class, 'index']);

// Route::get('show', [HomeController::class, 'show']);

// Route::get('index', [MotoController::class, 'index']);




Route::get('/', [ArticleController::class, 'lista']);

Route::get('/form', [ArticleController::class, 'articleslist']);

Route::post('/guardar', [ArticleController::class, 'guardar'])->name('guardar');

Route::delete('/borrar/{id}', [ArticleController::class, 'borrar'])->name('borrar');

Route::get('/editform/{id}', [ArticleController::class, 'editform'])->name('editform');

Route::patch('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');