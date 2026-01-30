<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UsersController::class, 'queries']);


Route::post('/user',[UsersController::class, 'login']);
Route::view('form','user');

#Admin Login Routes
// Admin Register
Route::get('/admin/register', [AdminRegisterController::class, 'showRegisterForm']);
Route::post('/admin/register', [AdminRegisterController::class, 'register']);
// Admin Login
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
// Admin Logout
Route::get('/admin/logout', [AdminLoginController::class, 'logout']);


// #Login page
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);

#for CRUD
Route::get('/product',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product',[ProductController::class,'store'])->name('product.store');
Route::get('/product{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');



Route::middleware('adminauth')->group(function () {
    Route::get('/dashboard', function () {
        return view('students.index');
    });

    #studen CDUD
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/student', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/student/{student}/destroy', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');


    Route::get('/student/trash', [StudentController::class, 'trash']);
    Route::get('/student/{student}/restore', [StudentController::class, 'restore'])->name('student.restore');
    Route::delete('/student/{student}/force-delete', [StudentController::class, 'forceDelete'])->name('force.delete');
    });









