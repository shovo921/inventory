<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
//backend route
Route::group(['prefix'=>'Admin'], function(){
    Route::get('/login', [AdminController::class, 'index'])->name('index');
});

//frontend route

Route::get('/', function () {
    return view('welcome');
});
