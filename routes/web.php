<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StripeController;
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

Route::get('/', [PageController::class, 'index']);

Route::get('/payment', function () {
    return view('payment');
})->name('payment');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::post('email', [EmailController::class, 'email']);
Route::get('back', [PageController::class, 'back']);
Route::group(['middleware' => ['payment']], function () {
    Route::get('about', [PageController::class, 'aboutUs']);

    Route::post('doctor/account', [RegisterController::class, 'registerDoctor']);
    Route::get('/registers', [RegisterController::class, 'index'])->name('registerClient');
    Route::get('register/client', [RegisterController::class, 'indexClient']);
    Route::post('register/client/store', [RegisterController::class, 'registerClient']);

    Route::get('profile/', [DoctorController::class, 'index']);
    Route::get('doctor/schedule', [DoctorController::class, 'createSchedule']);
    Route::post('doctor/add/schedule', [DoctorController::class, 'addSchedule']);
    Route::get('doctor/edit/profile/{doctorId}', [DoctorController::class, 'editProfileDoctor']);
    Route::post('doctor/update/profile', [DoctorController::class, 'updateProfileDoctor']);
    Route::get('doctor/work', [DoctorController::class, 'editWorkDoctor']);
    Route::post('doctor/update/work', [DoctorController::class, 'updateWorkDoctor']);
    Route::get('profile/doctor/details/{doctorId}', [DoctorController::class, 'profileDoctorDetails']);

    Route::get('edit/schedule', [DoctorController::class, 'editSchedule']);
    Route::post('update/schedule', [DoctorController::class, 'updateSchedule']);
    Route::post('update/delete', [DoctorController::class, 'deteleSchedule']);
    Route::post('delete/schedule/multiple', [DoctorController::class, 'deleteMultipleSchedule']);
    Route::get('socail/media', [DoctorController::class, 'socialMedia']);
    Route::post('socail/add', [DoctorController::class, 'addSocialMedia']);
    Route::get('socail/edit', [DoctorController::class, 'editSocialmedia']);
    Route::post('socail/store', [DoctorController::class, 'updateSocialmedia']);
    Route::get('photo/', [DoctorController::class, 'photoProfile']);
    Route::post('photo/store', [DoctorController::class, 'storeProfilePhoto']);
    Route::post('speciality/update', [DoctorController::class, 'speciaality']);
    Route::post('deleteSpeciality', [DoctorController::class, 'deleteSpeciality']);
});
