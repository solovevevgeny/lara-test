<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MainPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainPageController::class, 'index']);

Route::get('/articles',[ArticlesController::class,'index']);
Route::get('/article/{slug}',[ArticlesController::class,'show']); 

Route::get('/articles/tag/{tagId}',[ArticlesController::class, 'tag']);