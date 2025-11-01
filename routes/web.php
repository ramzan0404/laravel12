<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UsersController::class, 'queries']);


Route::post('/user',[UsersController::class, 'login']);
Route::view('form','user');


#Login page
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

#for CRUD
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');



#studen CDUD
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');





