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

Route::get('/', 'GuestController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web']], function () {
    Route::get('/my-cv', 'GuestController@cv')->name('cv');
    Route::get('/contact', 'GuestController@contact')->name('contact');
    Route::get('/terms', 'GuestController@terms')->name('terms');
    Route::post('/search', 'GuestController@searchResults')->name('search');
    Route::get('/projects', 'ProjectController@index')->name('all-projects');
    Route::post('/send-email', 'GuestController@mail')->name('send-emails');
});

Route::post('/projects/store', 'ProjectController@store')->name('create-project');

Route::get('/projects/{id}/edit', 'ProjectController@update')->name('update-project');

Route::get('/projects/{id}/delete', 'ProjectController@destroy')->name('delete-project');

Auth::routes();
