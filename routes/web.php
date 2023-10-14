<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
    return view('index');
})->middleware('auth');

// Login and Logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'must-admin']);
Route::get('/teacher', [TeacherController::class, 'index'])->middleware(['auth', 'must-teacher']);
Route::get('/student', [StudentController::class, 'index'])->middleware(['auth', 'must-student']);
Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/subject', [SubjectController::class, 'index'])->middleware('auth');
Route::get('/shift', [ShiftController::class, 'index'])->middleware('auth');
Route::get('/schedule', [ScheduleController::class, 'index'])->middleware('auth');
Route::get('/score', [ScoreController::class, 'index'])->middleware('auth');
Route::get('/notification', [NotificationController::class, 'index'])->middleware('auth');
