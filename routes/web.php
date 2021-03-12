<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
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
    return view('jen/pages/new-home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('jen/pages/new-home');
})->name('dashboard');

Route::post('doctor/account', [RegisterController::class,'registerDoctor']);

Route::get('home/', [PageController::class,'index']);

Route::get('register/doctor', [RegisterController::class,'index']);
Route::get('register/client', [RegisterController::class,'indexClient']);

Route::get('profile/', [DoctorController::class,'index']);
Route::get('doctor/schedule', [DoctorController::class,'createSchedule']);
Route::post('doctor/add/schedule', [DoctorController::class,'addSchedule']);
Route::get('doctor/edit/profile/{doctorId}', [DoctorController::class,'editProfileDoctor']);
Route::post('doctor/update/profile', [DoctorController::class,'updateProfileDoctor']);
Route::get('doctor/work', [DoctorController::class,'editWorkDoctor']);
Route::post('doctor/update/work', [DoctorController::class,'updateWorkDoctor']);
Route::get('profile/doctor/details/{doctorId}', [DoctorController::class,'profileDoctorDetails']);
