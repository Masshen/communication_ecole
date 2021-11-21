<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function(){

    Route::get('/',[FrontController::class,'dashboard'])->name('front.index');
    Route::get('classe',[FrontController::class,'classes'])->name('front.class');
    Route::get('create_class',[CreateController::class,'classes'])->name('create.class');
    Route::post('create_class',[CreateController::class,'create_class'])->name('post.class');

    Route::get('eleve',[FrontController::class,'pupils'])->name('front.pupil');
    Route::get('create_pupil',[CreateController::class,'eleves'])->name('create.pupil');
    Route::post('create_pupil',[CreateController::class,'create_pupil'])->name('post.pupil');
    Route::get('/logout', [HomeController::class, 'logout']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
