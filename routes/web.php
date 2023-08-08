<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ConatctController;
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Recognition;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserProfileController;
use App\Models\SubCategory;
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
//Route::group(['prefix'=>'Admin'], function(){
//    Route::get('/login', [AdminController::class, 'index'])->name('index');
//});


Route::get('/dashboard',[AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[AdminController::class, 'index'])->name('index');
//frontend route

Route::get('/search',[SearchController::class,'index'])->name('search.index');
Route::post('/search',[SearchController::class,'search'])->name('search');
Route::post('/contact',[Controller::class,'ContactStore'])->name('contact');
Route::get('/userprofile',[UserProfileController::class,'index'])->name('userprofile.index');
Route::post('/image',[UserProfileController::class,'image'])->name('image');


Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

//admin auth
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

});


//admin panel

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin'], function () {
// banner list
        Route::middleware(['role.check.admin'])->group(function () {
//            Route::get('/brand/list', [BrandController::class, 'index'])->name('brand.list');
            Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
//            Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
        });
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

        // home Brand
        Route::get('/banner/list', [HomeBannerController::class, 'index'])->name('brand.list');
        Route::get('/banner/view', [HomeBannerController::class, 'view'])->name('brand.view');
//        Route::get('/banner/create', [HomeBannerController::class, 'create'])->name('brand.create');
        Route::post('/banner/store', [HomeBannerController::class, 'store'])->name('brand.store');
        Route::get('/banner/edit/{id}', [HomeBannerController::class, 'edit'])->name('brand.edit');
        Route::post('/banner/update', [HomeBannerController::class, 'update'])->name('brand.update');
        Route::post('/banner/destroy', [HomeBannerController::class, 'destroy'])->name('brand.destroy');

        // home category
        Route::get('/category/list', [CategoryController::class, 'index'])->name('category.list');
        Route::get('/category/view', [CategoryController::class, 'view'])->name('category.view');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');
        Route::post('/category/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

        Route::get('/sub/category/list', [SubCategoryController::class, 'index'])->name('sub.category.list');
        Route::get('/sub/category/view', [SubCategoryController::class, 'view'])->name('sub.category.view');
        Route::get('/sub/category/create', [SubCategoryController::class, 'create'])->name('sub.category.create');
        Route::post('/sub/category/store', [SubCategoryController::class, 'store'])->name('sub.category.store');
        Route::get('/sub/category/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub.category.edit');
        Route::post('/sub/category/update', [SubCategoryController::class, 'update'])->name('sub.category.update');
        Route::post('/sub/category/destroy', [SubCategoryController::class, 'destroy'])->name('sub.category.destroy');

//        product controller
        Route::get('/product/list', [ProductController::class, 'index'])->name('product.list');
        Route::get('/product/view', [ProductController::class, 'view'])->name('product.view');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
        Route::post('/product/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

//        get sub categories
        Route::get('/subcategories/{category_id}',[SubCategoryController::class, 'GetData'])->name('sub.category.GetData');

//        order Management
//        Route::get('/order/list', [OrderController::class, 'index'])->name('order.list');
//        Route::get('/order/view', [OrderController::class, 'view'])->name('order.view');
//        Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
//        Route::post('/order/destroy', [OrderController::class, 'destroy'])->name('order.destroy');

//recognition

        Route::get('/recognition/list', [Recognition::class, 'list'])->name('recognition.list');
        Route::get('/recognition/view', [Recognition::class, 'view'])->name('recognition.view');
        Route::get('/recognition/create', [Recognition::class, 'create'])->name('recognition.create');
        Route::post('/recognition/destroy', [Recognition::class, 'destroy'])->name('recognition.destroy');
        Route::get('/shoping/card/{product_id}', [Recognition::class, 'shoping'])->name('shoping.card');
        Route::post('/shopingorder', [Recognition::class, 'shopingorder'])->name('shoping.order');

//    recognition manually insert

        Route::post('/recognition/manually/store', [Recognition::class, 'ManuallyStore'])->name('recognition.manually.store');

//recognition manager
        Route::get('/order/list', [OrderController::class, 'list'])->name('order.list');
        Route::get('/order/view/{id}', [OrderController::class, 'view'])->name('order.view');
        Route::post('/order/update', [OrderController::class, 'update'])->name('order.update');
        Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/order/destroy', [OrderController::class, 'destroy'])->name('order.destroy');
//        pd generator
        Route::get('/pdf/download/{id}', [PdfController::class, 'pdf'])->name('pdf.download');

        //        stock maanger
        Route::get('/stock/list', [StockController::class, 'index'])->name('stock.index');
        Route::post('/stock/search', [StockController::class, 'search'])->name('stock.search');
//        admin user
        Route::get('/user/list', [AdminController::class, 'list'])->name('user.list');
        Route::get('/user/profile', [AdminController::class, 'profile'])->name('user.profile');

    });
});
