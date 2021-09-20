<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/applicants', 'DashboardController@applicants')->name('applicants');
Route::get('/dashboard/reviewed-applicants', 'DashboardController@reviewedApplicants')->name('reviewed.applicants');
Route::get('/login', 'Auth\LoginController@index')->name('login');
