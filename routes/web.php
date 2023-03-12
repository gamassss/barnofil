<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\RegistrasiController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\PenggalangDanaController;

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

Route::get('/payment', [PaymentController::class, 'index']);

// landing page

Route::get('/', function () {
    return view('landing_page');
});

// registration

Route::get('/signup', [RegistrasiController::class, 'signup']);
Route::post('/signup', [RegistrasiController::class, 'store']);

// verify registration email

Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
Route::get('/email/verified-success', [VerificationController::class, 'after_verified'])->middleware('auth');
Route::get('/email/verified/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/resend-email', [VerificationController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// authentication

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

// auth with driver
Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback'])->name('google.callback');

// log users out

Route::post('/logout', [LoginController::class, 'logout']);

// ask link to reset password

Route::get('/forgot-password', [ResetPasswordController::class, 'get_reset_password']);
Route::post('/forgot-password', [ResetPasswordController::class, 'reset_password'])->middleware('guest')->name('password.email');

// password resetting

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'get_reset_form'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'password_update'])->middleware('guest')->name('password.update');


// admin authorization

Route::group(['middleware' => ['role:admin', 'verified'], 'prefix' => '/admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::prefix('/data')->group(function () {
        Route::resource('/program', ProgramController::class);
        Route::resource('/user', UserDashboardController::class);
        Route::resource('/penggalang', PenggalangDanaController::class);
    });

    Route::prefix('/trashed')->group(function () {
        Route::get('/program', [ProgramController::class, 'trash'])->name('program.trash');
    });

    Route::prefix('/restore')->group(function () {
        Route::get('/program/{id}', [ProgramController::class, 'restore'])->name('program.restore');
    });
});
