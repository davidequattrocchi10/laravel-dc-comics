<?php

use App\Models\Comic;
use App\Http\Controllers\admin\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('welcome');

Route::get('/signUp', [UserController::class, 'signUp'])->name('signUp');

Route::get('/allComics', [UserController::class, 'allComics'])->name('allComics');

Route::get('/comic/{comic}', [UserController::class, 'comic'])->name('comic');

// CRUD Operation

Route::resource('comics', ComicController::class);

// or in this way

// Route::get('/admin/comics', [ComicController::class, 'index'])->name('admin.comics.index');
// Route::get('/admin/comics/{comic}', [ComicController::class, 'show'])->name('admin.comics.show');
// Route::get('/admin/comics/create', [ComicController::class, 'create'])->name('admin.comics.create');
// Route::post('/admin/comics', [ComicController::class, 'store'])->name('admin.comics.store');
// Route::get('/admin/comics/{comic}/edit', [ComicController::class, 'edit'])->name('admin.comics.edit');
// Route::put('/admin/comics/{comic}', [ComicController::class, 'update'])->name('admin.comics.update');
// Route::delete('/admin/comics/{comic}', [ComicController::class, 'destroy'])->name('admin.comics.destroy');
