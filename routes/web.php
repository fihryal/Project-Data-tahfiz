<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/docs',[EmployeeController::class, 'index'])->name('index');
Route::get('/home',[EmployeeController::class, 'home'])->name('home');

Route::get('/tambahsetoran',[EmployeeController::class, 'tambahsetoran'])->name('tambahsetoran')->middleware('is_admin');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata')->middleware('is_admin');

Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata')->middleware('is_admin');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata')->middleware('is_admin');


Route::get('/deletedata/{id}',[EmployeeController::class, 'deletedata'])->name('deletedata')->middleware('is_admin');