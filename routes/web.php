<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ConatctController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Controller;

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
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

//frontend route
Route::get('/search',[SearchController::class,'index'])->name('search.index');
Route::post('/search',[SearchController::class,'search'])->name('search');
Route::post('/contact',[Controller::class,'ContactStore'])->name('contact');
Route::get('/userprofile',[UserProfileController::class,'index'])->name('userprofile.index');


Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

//admin auth
Route::group(['middleware' => 'admin'], function() {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

});


//admin panel

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin'], function () {
// banner list
        Route::get('/banner/list', [BannerController::class, 'index'])->name('banner.list');
        Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
//        conatct list
        Route::get('/conatct/list', [ConatctController::class, 'index'])->name('conatct.list');
        Route::get('/conatct/details/{id}', [ConatctController::class, 'details'])->name('conatct.details');
        Route::post('/conatct/destroy', [ConatctController::class, 'destory'])->name('conatct.destroy');


    });
});
