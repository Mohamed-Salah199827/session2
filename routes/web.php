<?php


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
//! get
//! post
//! put
//! delete

Route::get('/admin',[ App\Http\Controllers\adminController::class, 'index'])->name("admin.index");
Route::delete('/delete/{id}',[ App\Http\Controllers\adminController::class, 'destroy' ])->name("admin.destroy");
Route::get('/update/{id}',[ App\Http\Controllers\adminController::class, 'update' ])->name("admin.update");
Route::put('/store/{id}',[ App\Http\Controllers\adminController::class, 'store' ])->name("admin.store");
