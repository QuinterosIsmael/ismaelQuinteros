<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function() {
    return 'Hola mundo desde welcome';
});

Route::get('/welcome2', function() {
    return 'Hola mundo desde welcome2';
});

Route::get('/saludar/{name}/{lastName}', function ($name,$lastName){
    return 'Hola ' . $name . ' ' . $lastName;
});

Route::get('index', [HomeController::class, 'index']);

Route::get('index', [HomeController::class, 'show']);