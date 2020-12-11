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
Route::get('/clear', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    return "Cache cleared";
});


Route::get('/', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('reports','ContactsController@report')->name('report');
	Route::post('download_report', 'ContactsController@download')->name('download');
    Route::get('contacts', 'ContactsController@index')->name('contacts');
    Route::post('contact_search', 'ContactsController@index')->name('contact_search');
	Route::get('create-contact', 'ContactsController@create')->name('createContact');
	Route::post('save-contact', 'ContactsController@store')->name('savecontact');
	Route::post('remove-conatct', 'ContactsController@destroy')->name('removecontact');
	Route::get('edit-contact/{id}', 'ContactsController@edit')->name('editcontact');
	Route::get('contact-details/{id}', 'ContactsController@showDetails')->name('conatctdetails');
	Route::post('update-contact', 'ContactsController@update')->name('updatecontact');
   
});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

