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
    return view('auth.login');
});

Route::get('/mail' , function(){
  Mail::raw('On your birthday we wish for you that whatever you want most in life it comes to you just the way you imagined it or better. Happy birthday' , function ($message) {
    $message->to('example@gmail.com' , 'Das Patel')
    ->subject('Happy Birthday Wish!');
    $message->from('example@gmail.com' , 'Admin');
  });
  echo 'Birthday Message Send Successfully!';
});

Auth::routes();
Route::get('/home', 'UserController@index')->name('home');