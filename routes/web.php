<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewStudentsController;

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

// Route::resource('/students', ViewStudentsController::class)->except(['show']);
Route::get('/students', [ViewStudentsController::class, 'index'])->name('mahasiswa');

Route::get('/created', [ViewStudentsController::class, 'create'])->name('tambahData');

Route::post('/insertdata', [ViewStudentsController::class, 'store'])->name('insertdata');

Route::get('/students/{id}', [ViewStudentsController::class, 'edit'])->name('tampilkandata');

Route::post('/students/{id}', [ViewStudentsController::class, 'update'])->name('updatedata');

Route::get('/delete/{id}', [ViewStudentsController::class, 'destroy'])->name('delete');