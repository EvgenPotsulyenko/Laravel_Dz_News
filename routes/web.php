<?php

use App\Http\Controllers\MyController;
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


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [MyController::class, 'index']);
Route::get('/add', [MyController::class, 'create_news']);
Route::get('/crt', [MyController::class, 'create']);
Route::get('/open/{Summary}', [MyController::class, 'open']);
