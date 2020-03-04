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

// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('contact', function () {
    return view('contact');
});

// Route::get('signup', function () {
//     return view('signup');
// });

Route::get('endpoint', function () {
    return view('endpoint');
});

// Route::post('message', function () {
//     return view('emails/thanks');
// });

// Route::view('form', 'ContactController@store');
// Route::post('contact', 'ContactController@store');

Route::get('newarticles', function () {
    return view('newarticles');
});

// Route::get('viewarticles', function () {
//     return view('newarticles');
// });

// Route::get('contactThanks', function () {
//     return view('contactThanks');
// });

// Route::post('contact','ContactController@store');

Route::post('submitArticle', 'ArticlesController@save');

Route::post('sendmail', 'ContactController@store');

Route::post('', function () {
    return view('');
});

Route::post('endpoint', function () {
    return view('endpoint');
});

Route::get('endpoint', function () {
    return view('endpoint');
});

Route::get('viewarticles', 'ArticlesController@index');

Route::get('showarticle', 'ArticlesController@showArticle');


Route::get('main', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
