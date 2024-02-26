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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello', ['title'=>'Hello world!']);
});
use App\Http\Controllers\CategoryAController;
Route::get('/categorya', [CategoryAController::class, 'index']);
Route::get('/categorya/{id}', [CategoryAController::class, 'show']);
use App\Http\Controllers\ConsumesController;
Route::get('/users/{id}', [ConsumesController::class, 'show']);