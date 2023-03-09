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

//Route::get('/{uri?}', function () {
//    return view('index');
//})->where('uri', '(.*)');
Route::get('/',[\App\Http\Controllers\SliderController::class,'show']);
Route::post('/send',[App\Http\Controllers\SliderController::class,'send'])->name('send');
Route::get('/news/{slug}',[App\Http\Controllers\ArticleController::class,'index'])->name('article');
Route::get('/news',[App\Http\Controllers\ArticleController::class,'list'])->name('articles');
