<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SectionController;
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


// ===================Student======================================
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/new-student',[HomeController::class,'saveStudent'])->name('new.student');
Route::get('/manage-student',[HomeController::class,'manageStudent'])->name('manage.student');

Route::get('/edit-student/{id}',[HomeController::class,'editStudent'])->name('edit.student');
Route::post('/update-student',[HomeController::class,'updateStudent'])->name('update.student');
Route::post('/delete-student',[HomeController::class,'deleteStudent'])->name('delete.student');


//=======================Department=======================
Route::get('/add-department',[DepartmentController::class,'index'])->name('add.department');
Route::post('/new-department',[DepartmentController::class,'saveDept'])->name('new.department');
Route::get('/manage-department',[DepartmentController::class,'manageDept'])->name('manage.dept');


//===============section=========================

Route::get('/add-section',[SectionController::class,'index'])->name('add.section');
Route::post('new-section',[SectionController::class,'saveSec'])->name('new.section');
Route::get('/manage-section',[SectionController::class,'manageSec'])->name('manage.sec');
