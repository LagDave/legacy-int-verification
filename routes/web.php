<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function(){
    return 'Dave';
});
Route::get('/verify/{email}', 'EmailVerificationsController@index')->name('verify.home');
Route::post('/verify/code/{email}', 'EmailVerificationsController@verifycode')->name('verify.verifycode');
