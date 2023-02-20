<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ConatctController;
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeaPageSettingController;
use App\Http\Controllers\Admin\OurStoryController;
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
Route::get('/',[Controller::class,'index'])->name('homepage');
Route::get('/search',[SearchController::class,'index'])->name('search.index');
Route::post('/search',[SearchController::class,'search'])->name('search');
Route::post('/contact',[Controller::class,'ContactStore'])->name('contact');
Route::get('/userprofile',[UserProfileController::class,'index'])->name('userprofile.index');
Route::post('/image',[UserProfileController::class,'image'])->name('image');


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
//        homepage seeting
        Route::get('/homepage/index', [HomeaPageSettingController::class, 'index'])->name('homepage.index');
        Route::post('/homepage/edit', [HomeaPageSettingController::class, 'edit'])->name('homepage.edit');
        Route::post('/homepage/store', [HomeaPageSettingController::class, 'store'])->name('homepage.store');

        // story list
        Route::get('/story/list', [OurStoryController::class, 'index'])->name('story.list');
        Route::get('/story/view', [OurStoryController::class, 'view'])->name('story.view');
        Route::get('/story/create', [OurStoryController::class, 'create'])->name('story.create');
        Route::post('/story/store', [OurStoryController::class, 'store'])->name('story.store');
        Route::get('/story/edit/{id}', [OurStoryController::class, 'edit'])->name('story.edit');
        Route::post('/story/update', [OurStoryController::class, 'update'])->name('story.update');
        Route::post('/story/destroy', [OurStoryController::class, 'destroy'])->name('story.destroy');

        // home banner
        Route::get('/banner/list', [HomeBannerController::class, 'index'])->name('banner.list');
        Route::get('/banner/view', [HomeBannerController::class, 'view'])->name('banner.view');
        Route::get('/banner/create', [HomeBannerController::class, 'create'])->name('banner.create');
        Route::post('/banner/store', [HomeBannerController::class, 'store'])->name('banner.store');
        Route::get('/banner/edit/{id}', [HomeBannerController::class, 'edit'])->name('banner.edit');
        Route::post('/banner/update', [HomeBannerController::class, 'update'])->name('banner.update');
        Route::post('/banner/destroy', [HomeBannerController::class, 'destroy'])->name('banner.destroy');

        // home service
        Route::get('/service/list', [ServiceController::class, 'index'])->name('service.list');
        Route::get('/service/view', [ServiceController::class, 'view'])->name('service.view');
        Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/service/update', [ServiceController::class, 'update'])->name('service.update');
        Route::post('/service/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');



    });
});
