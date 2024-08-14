<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [StudentController::class, 'index'])
->name('index');

Route::post('/', [StudentController::class, 'store'])
->name('store');

Route::put('/{student}', [StudentController::class, 'update'])
->name('update');
Route::delete('/{student}', [StudentController::class, 'destroy'])
->name('destroy');
