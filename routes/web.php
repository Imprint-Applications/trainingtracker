<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainingsController;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\UsersController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/dashboard', [UsersController::class, 'show'])->name('dashboard');

// Training
Route::get('/training', [TrainingsController::class, 'show'])->name('trainingShow');
Route::get('/training/create', [TrainingsController::class, 'create'])->name('trainingCreate');
Route::put('/training/store', [TrainingController::class, 'store'])->name('trainingStore');
Route::get('/training/{id}/view', [TrainingController::class, 'index'])->name('trainingView');

// Employer
Route::get('/employer', [EmployersController::class, 'show'])->name('employerShow');
Route::get('/employer/create', [EmployersController::class, 'create'])->name('employerCreate');
Route::put('/employer/store', [EmployersController::class, 'store'])->name('employerStore');

// Route::get('/training', [
//     'uses' =>  [TrainingsController::class, 'show'],
//     'as' => 'training-list'
// ])->name('trainingShow');
