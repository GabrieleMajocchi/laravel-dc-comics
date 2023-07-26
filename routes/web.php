<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminComicsController as AdminComicsController;
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


Route::get('/', [AdminComicsController::class, 'index'])->name('welcome');

Route::get('/admin/create', [AdminComicsController::class, 'create'])->name('admin.create');

Route::post('/admin', [AdminComicsController::class, 'store'])->name('admin.store');

Route::get('/admin/{comic}', [AdminComicsController::class, 'show'])->name('admin.show');

Route::get('/admin/{id}/edit', [AdminComicsController::class, 'edit'])->name('admin.edit');

Route::put('/admin/{id}', [AdminComicsController::class, 'update'])->name('admin.update');
