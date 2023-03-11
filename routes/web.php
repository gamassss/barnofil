<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\Program\ProgramController;

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
Route::get('/', function () {
    return view('landing_page');
});

// registration

Route::get('/signup', [RegistrasiController::class, 'signup']);
Route::post('/signup', [RegistrasiController::class, 'store']);

Route::get('/email/verify', [VerificationController::Class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verified-success', [VerificationController::Class, 'after_verified'])->middleware('auth');
Route::get('/email/verified/{id}/{hash}', [VerificationController::Class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');

// authentication

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

//log users out

Route::post('/logout', [LoginController::class, 'logout']);

// admin authorization

Route::group(['middleware' => ['role:admin', 'verified'], 'prefix' => '/admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::prefix('/data')->group(function () {
        Route::resource('/program', ProgramController::class);
    });

    Route::prefix('/trashed')->group(function () {
        Route::get('/program', [ProgramController::class, 'trash'])->name('program.trash');
    });

    Route::prefix('/restore')->group(function () {
        Route::get('/program/{id}', [ProgramController::class, 'restore'])->name('program.restore');
    });
});
