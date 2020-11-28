<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\EnemyController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('heroes', HeroController::class);
    Route::resource('item', ItemController::class);
    Route::resource('enemy', EnemyController::class);

    /*
    Route::group(['prefix' => 'heroes'], function () {
        Route::get('/', [HeroController::class, 'index'])->name('admin.heroes.index');
        Route::get('create', [HeroController::class, 'create'])->name('admin.heroes.create');
        Route::post('store', [HeroController::class, 'store'])->name('admin.heroes.store');
        Route::get('edit/{id}', [HeroController::class, 'edit'])->name('admin.heroes.edit');
        Route::post('update/{id}', [HeroController::class, 'update'])->name('admin.heroes.update');
        Route::DELETE('destroy/{id}', [HeroController::class, 'destroy'])->name('admin.heroes.destroy');
    });
*/

});
