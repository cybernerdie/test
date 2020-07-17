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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//register the /facebookcallback on developers.facebook.com
Route::get('/redirect', 'FacebookAuthController@redirect')->name('facebookredirect');
Route::get('/login/facebook/callback', 'FacebookAuthController@callback')->name('facebook');


//register the /googlecallback on google console
Route::get('/googleredirect', 'GoogleAuthController@redirect')->name('googleredirect');
Route::get('/login/google/callback', 'GoogleAuthController@callback')->name('google');

Route::get('/verify', 'HomeController@verifyrole')->middleware('auth');
Route::post('/updaterole', 'HomeController@updaterole')->middleware('auth')->name('verify');


Route::get('/student/dashboard', 'HomeController@student')->middleware(['auth', 'role', 'student']);
Route::get('/lecturer/dashboard', 'HomeController@lecturer')->middleware(['auth', 'role', 'lecturer']);
Route::get('logout', 'HomeController@logout')->name('logout');
