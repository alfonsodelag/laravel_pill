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

Route::post('sendmail', 'ContactController@store');




// Route::get('endpoint', function () {
//     return view('endpoint');
// });

Route::get('newarticles', function () {
    return view('newarticles');
});


Route::post('submitArticle', 'ArticlesController@save');


Route::get('/showarticle/{slug}', 'ArticlesController@showArticle');


Route::get('viewarticles', 'ArticlesController@index');

// Route::get('showarticle/', 'ArticlesController@showArticle');


// Route::get('main', function () {
//     return view('main');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
