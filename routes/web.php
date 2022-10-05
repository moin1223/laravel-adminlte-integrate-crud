<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\DsahboardController;
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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [DsahboardController::class, 'index'])->name('admin.index');
Route::get('/admin/categories', [App\Http\Controllers\ProductController::class, 'index'])->name('categories.index');

// products
Route::group(['prefix'=>'admin/dashboard'], function(){

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product-update/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('/product-delete/{id}',[ProductController::class,'destroy'])->name('destroy.index');

});
