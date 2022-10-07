<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\DsahboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//auth
 Route::controller(UserController::class)->group(function(){

        Route::get('registration', 'registration')->name('registration');
        Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

        Route::get('login', 'index')->name('login');
        Route::post('validate_login', 'validate_login')->name('sample.validate_login');

        Route::get('logout', 'logout')->name('logout');
    
});



// Admindashboard
Route::get('/admin/dashboard', [DsahboardController::class, 'index'])->name('admin.index');

// products
Route::group(['prefix'=>'admin/dashboard'], function(){

    Route::get('/products',[ProductController::class,'index'])->name('product.index');
    Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product-update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product-delete/{id}',[ProductController::class,'destroy'])->name('destroy.index');

});
