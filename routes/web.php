<?php

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







Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    
    Route::get('/holidaycategory', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'index']);
    Route::get('add-holidaycategory', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'create']);
    Route::post('add-holidaycategory', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'store']);
    Route::get('edit-holidaycategory/{holidaycategory_id}', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'edit']);
    Route::put('update-holidaycategory/{holidaycategory_id}', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'update']);
    Route::get('delete-holidaycategory/{holidaycategory_id}', [App\Http\Controllers\Admin\HolidayCategoryController::class, 'destroy']);

    Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
   
    Route::get('/add-post', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('admin.create');
    Route::post('/add-post', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('admin.store');
    Route::get('/post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('/update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('/delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);



    Route::get('/packages', [App\Http\Controllers\Admin\HolidayController::class, 'index']);
   
    Route::get('/add-holidaypackages', [App\Http\Controllers\Admin\HolidayController::class, 'create']);
    Route::post('/add-holidaypackages', [App\Http\Controllers\Admin\HolidayController::class, 'store'])->name('admin.store');
    Route::get('/holiday/{holiday_id}', [App\Http\Controllers\Admin\HolidayController::class, 'edit'])->name('admin.edit');
    Route::put('/update-package/{holiday_id}', [App\Http\Controllers\Admin\HolidayController::class, 'update'])->name('admin.update');
    Route::get('/delete-package/{holiday_id}', [App\Http\Controllers\Admin\HolidayController::class, 'destroy']);



});

Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/holidays', [App\Http\Controllers\Frontend\FrontendController::class, 'holiday']);
Route::get('/hotels', [App\Http\Controllers\Frontend\FrontendController::class, 'hotel']);
Route::get('/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);


Route::get('/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'show'])->name('view');
Route::get('/{holidaycategory_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryHoliday'])->name('index');
Route::get('/{category_slug}/{holiday_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showHoliday'])->name('views');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




    


