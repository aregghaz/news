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

Route::get('/', function () {
    return view('login');
})->name('login');


Route::post('/sing-in',  "HomeController@singIn")->name('singIn');




Route::group(['prefix' => 'admin', 'middleware' => 'role'], function () {

    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/logOut', 'HomeController@logOut')->name('logOut');
    Route::resource('news', 'NewsController');
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('/404', function () {
    return view('404');
});