<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\frontend\FrontendController;

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
/**
 * frontend all route
 */
Route::get('/',[FrontendController::class,'showhomepage'])->name('home.page');
Route::get('/menu',[FrontendController::class,'showmenu'])->name('menu.page');
Route::get('/blog',[FrontendController::class,'showblog'])->name('blog.page');
Route::get('/staff',[FrontendController::class,'showstaff'])->name('staff.page');

/**
 * backend All controller
 */
Route::get('/admin',[DashboardController::class,'showdashboard'])->name('dashboard.page');

Route::resource('student',StudentController::class);

Route::resource('staff',StaffController::class);

Route::get('staff-delete/{id}',[StaffController::class,'staffdelete']);









