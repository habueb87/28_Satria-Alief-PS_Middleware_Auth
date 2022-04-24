<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\partnerController;
use App\Http\Controllers\contController;
use App\Http\Controllers\logController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\dashboardPostController;

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

Route::get('main', [mainController::class, 'index'])->name('main');
Route::get('/', [mainController::class, 'index']);
Route::get('about', [aboutController::class, 'index']);
Route::get('partner', [partnerController::class, 'index']);
Route::get('contact', [contController::class, 'index']);
Route::get('index', [indexController::class, 'index'])->name('index');
Route::get('login', [logController::class, 'index'])->name('login');
Route::post('login1', [logController::class, 'login1']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
});
Route::get('/dashboard/posts/{ post:id }');
Route::resource('/dashboard/posts', dashboardPostController::class);
