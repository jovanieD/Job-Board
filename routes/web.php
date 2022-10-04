<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvailableJobsController;
use App\Http\Controllers;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [AvailableJobsController::class, 'index']);


Route::get('/job', function () {
    return view('/pages.job_seeker');
});

Route::get('/auth_create', function () {
    return view('/pages/auth_create');
});

Route::get('/pages/job_seeker', function () {
    return view('/pages/job_seeker');
});

Route::post('/register/create_account', [RegisterController::class, 'create_account']);

Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
