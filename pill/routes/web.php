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
use App\Mail\SendMail;
use App\Mail\WelcomeMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('message', function () {
    return view('emails/thanks');
});

Route::post('contact', 'ContactController@store');


Route::get('endpoint', function () {
    return view('endpoint');
});

Route::get('main', function () {
    return view('main');
});

Route::get('send-mail','MailSend@mailsend');

