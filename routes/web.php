<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\User\AkunController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GalangDanaController;
use App\Http\Controllers\User\DonasiController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\RegistrasiController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\Program\DashboardController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Program\SubmissionController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Content\LandingPageController;
use App\Http\Controllers\User\PenggalangDanaController;
use App\Http\Controllers\Program\DetailProgramController;

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


// landing page

Route::get('/', [LandingPageController::class, 'index']);
Route::post('/increase-likes/{id}', [LandingPageController::class, 'increaseLikes']);
Route::post('/decrease-likes/{id}', [LandingPageController::class, 'decreaseLikes']);

// detail program
Route::get('/detail/{id}', [DetailProgramController::class, 'index']);
Route::get('/isi_doa/{id}/{user_id}/{nominal}', [PaymentController::class, 'isiDoa']);
// user auth

Route::get('/user', [AkunController::class, 'index']);

// registration

Route::get('/signup', [RegistrasiController::class, 'signup'])->middleware('guest');
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
Route::get('auth/{provider}', [SocialiteController::class, 'redirectToProvider'])->name('google.login');
Route::get('auth/{provider}/callback/', [SocialiteController::class, 'handleProvideCallback'])->name('google.callback');

// log users out

Route::post('/logout', [LoginController::class, 'logout']);

// ask link to reset password

Route::get('/forgot-password', [ResetPasswordController::class, 'get_reset_password']);
Route::post('/forgot-password', [ResetPasswordController::class, 'reset_password'])->name('password.email');

// password resetting

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'get_reset_form'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'password_update'])->middleware('guest')->name('password.update');


// admin authorization

Route::group(['middleware' => ['role:admin', 'verified'], 'prefix' => '/admin'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/most-frequent', [DashboardController::class, 'get_most_donatur'])->name('most.donate.frequency');
    Route::get('/most-amount', [DashboardController::class, 'get_most_amount_donatur'])->name('most.donate.amount');

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

    Route::get('/submission/waiting', [SubmissionController::class, 'index_waiting'])->name('submission.waiting');
    Route::get('/submission/approved', [SubmissionController::class, 'index_approved'])->name('submission.approved');
    Route::get('/submission/rejected', [SubmissionController::class, 'index_rejected'])->name('submission.rejected');

    Route::put('/submission/waiting/{program}', [SubmissionController::class, 'approve_waiting_program'])->name('approve.waiting');
});

// user authorization
Route::get('/amount/{id}/{user_id}', [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'payment']);

Route::resource('/galangdana', GalangDanaController::class);
Route::get('/kelola-galangdana', [GalangDanaController::class, 'kelola_galang_dana'])->name('galangdana.kelola');
Route::get('/pilih-kategori', [GalangDanaController::class, 'pilih_kategori_galang_dana'])->name('galangdana.pilih_kategori');

Route::get('/donasi-saya', [DonasiController::class, 'index'])->name('donasisaya.index');