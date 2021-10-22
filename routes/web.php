<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\VacationController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('department')->middleware(['auth:sanctum','verified'])->resource('department', DepartmentController::class);

Route::prefix('job')->middleware(['auth:sanctum','verified'])->resource('job', JobController::class);

Route::prefix('employee')->middleware(['auth:sanctum','verified'])->resource('employee', EmployeeController::class);

Route::prefix('vacation')->middleware(['auth:sanctum','verified'])->resource('vacation', VacationController::class);
