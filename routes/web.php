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

Route::get('/', 'PageController@welcome')->name('index');
Route::get('/SignIn', 'PageController@signIn');
Route::get('/SignUp', 'PageController@signUp');
Route::resource('students', 'StudentController');
Route::resource('courses', 'CourseController');
