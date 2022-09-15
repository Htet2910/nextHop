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

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get('/language', array (
        'Middleware'=>'LanguageSwitcher',
        'uses'=>'LanguageController@index',
         ));

// Route::get('/home', 'Frontend\HomeController@home');
Route::get('/', 'Frontend\HomeController@home')->name('home');


Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/partner', function () {
    return view('frontend.partner');
})->name('frontend.partner');

Route::get('/services', function () {
    return view('frontend.services');
})->name('frontend.services');

Route::get('/blog', function () {
    return view('blog');
})->name('frontend.blog');

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('frontend.portfolio');

Route::get('/team', function () {
    return view('frontend.team');
})->name('frontend.team');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('frontend.faq');

Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('frontend.pricing');


Route::get('/contact', 'EmailController@index')->name('frontend.contact');
Route::post('/contact/send', 'EmailController@send');


// Backend Route list

Route::get('/login', function () {
    return view('backend.login');
});

Route::get('/backend', 'MainController@index');
Route::post('/backend/checklogin', 'MainController@checklogin');

Route::get('/logout', 'MainController@logout')->name('logout');

Route::group(['prefix' => 'backend',  'middleware' => 'auth'], function()
{
   Route::resource('navbars','Backend\NavbarController');
   Route::resource('abouts','Backend\AboutController');
   Route::resource('services','Backend\ServiceController');
   Route::resource('partners','Backend\PartnerController');
   Route::resource('contacts','Backend\ContactController');
 });