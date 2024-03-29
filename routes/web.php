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

Auth::routes();

Route::middleware('auth')->group(function(){
    // Route::get('/', function(){
    //     return redirect()->route('department.index');
    // });
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/department', 'DepartmentController');
    Route::resource('/instructor', 'InstructorController');
    Route::resource('/course', 'CourseController');
    Route::resource('/student', 'StudentController');
    Route::resource('/score', 'ScoreController');
});