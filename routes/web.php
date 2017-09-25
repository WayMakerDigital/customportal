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

Route::get('/', 'PagesController@login');
Route::get('/register', 'PagesController@register');
//Route::get('/dashboard', 'PagesController@dashboard');
Route::post('/dashboard', 'LoginController@signin')->name('signin');
Route::post('/signup', 'LoginController@signup')->name('signup');
Route::get('/dashboard/{id}/courses', 'LoginController@getCourses');
Route::get('dashboard/{id}', 'LoginController@getDashboard');
Route::get('/dashboard/{id}/details', 'LoginController@getCustomerDetails');
Route::put('/dashboard/{id}/details', 'LoginController@updateCustomerDetails')->name('update');
Route::get('test', 'ProductController@test');
