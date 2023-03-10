<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Program\ProgramController;
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

// landing page
Route::get('/', function () {
    return view('landing_page');
});

// authentication
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);

//log users out
Route::post('/logout', [LoginController::class, 'logout']);

// admin authorization
Route::group(['middleware' => ['role:admin'], 'prefix' => '/admin'], function () {
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
