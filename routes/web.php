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

Route::get('/', 'App\Http\Controllers\Site\HomeController@getIndex')->name('site.home.getIndex');

Route::get('/about', 'App\Http\Controllers\Site\AboutController@getIndex')->name('site.about.getIndex');

Route::get('/contact', 'App\Http\Controllers\Site\ContactController@getIndex')->name('site.contact.getIndex');
Route::get('/profile', 'App\Http\Controllers\Site\ProfileController@getIndex')->name('site.profile.getIndex');
Route::get('/profile/create', 'App\Http\Controllers\Site\ProfileController@getCreate')->name('site.profile.getCreate');
Route::post('/profile/create', 'App\Http\Controllers\Site\ProfileController@postCreate')->name('site.profile.postCreate');
Route::get('/profile/update/{id}', 'App\Http\Controllers\Site\ProfileController@getUpdate')->name('site.profile.getUpdate');
Route::post('/profile/update/{id}', 'App\Http\Controllers\Site\ProfileController@postUpdate')->name('site.profile.postUpdate');
Route::get('/profile/delete/{id}', 'App\Http\Controllers\Site\ProfileController@getDelete')->name('site.profile.getDelete');
