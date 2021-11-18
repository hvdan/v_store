<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('categories')->name('categories.')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/list',[CategoryController::class,'list'])->name('list');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}',  [CategoryController::class, 'destroy'])->name('destroy');

});
