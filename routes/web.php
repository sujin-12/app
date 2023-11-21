<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;

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


//Employee Routes
Route::get('/employeeList', [employeeController::class, 'employeeList']);
Route::get('/addEmployee', [employeeController::class, 'addEmployee']);
Route::post('/submitEmployee', [employeeController::class, 'submitEmployee']);
Route::get('/editEmployee/{id}', [employeeController::class, 'editEmployee']);
