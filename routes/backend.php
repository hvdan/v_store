<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('categories')->name('categories.')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/data', [CategoryController::class, 'data'])->name('data');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}',  [CategoryController::class, 'destroy'])->name('delete');
    Route::get('/search', [CategoryController::class, 'search'])->name('search');
});
Route::prefix('products')->name('products.')->group(function (){
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::get('/list',[ProductController::class, 'list'])->name('list');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/detail/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}',  [ProductController::class, 'destroy'])->name('delete');
});
Route::prefix('clients')->name('clients.')->group(function (){
    Route::get('/',[ClientController::class, 'index'])->name('index');
    Route::get('/list',[ClientController::class, 'list'])->name('list');
    Route::post('/store', [ClientController::class, 'store'])->name('store');
    Route::get('/detail/{id}', [ClientController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ClientController::class, 'update'])->name('update');
    Route::delete('/delete/{id}',  [ClientController::class, 'destroy'])->name('delete');
});
