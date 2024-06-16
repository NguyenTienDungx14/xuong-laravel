<?php

use App\Http\Controllers\Admin\CatalogueController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->as('admin.')->group(function () {

    Route::get('/', function ()
    {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::prefix('catalogues')->as('catalogues.')->group(function () {
        Route::get('/',                 [\App\Http\Controllers\Admin\CatalogueController::class,'index'])->name('index');
        Route::get('create',            [\App\Http\Controllers\Admin\CatalogueController::class,'create'])->name('create');
        Route::post('store',            [\App\Http\Controllers\Admin\CatalogueController::class,'store'])->name('store');
        Route::get('show/{id}',         [\App\Http\Controllers\Admin\CatalogueController::class,'show'])->name('show');
        Route::get('{id}/edit',         [\App\Http\Controllers\Admin\CatalogueController::class,'edit'])->name('edit');
        Route::put('{id}/update',       [\App\Http\Controllers\Admin\CatalogueController::class,'update'])->name('update');
        Route::get('{id}/destroy',      [\App\Http\Controllers\Admin\CatalogueController::class,'destroy'])->name('destroy');

    });
});


