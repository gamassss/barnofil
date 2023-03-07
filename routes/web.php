<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('/', function() {
		return view('landing_page');
});

// authentication
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/admin', function() {
    return view('layout.main');
});
