<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\available_jobController;

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
    return view('/layouts/app');
});

Route::get('/job', function () {
    return view('/pages/job_seeker');
});

Route::get('/auth_create', function () {
    return view('/pages/auth_create');
});

