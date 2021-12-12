<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


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

Route::get('/home',[WelcomeController::class,'home']);
Route::get('/page',[WelcomeController::class,'page']);
Route::get('/about',[WelcomeController::class,'about']);
Route::get('/details/{id}',[WelcomeController::class,'details']);

Route::get('/service/{name?}',[WelcomeController::class,'service']);
Route::get('/services',[WelcomeController::class,'services']);

