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

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'StudentController@index')->name('home');

// student route

Route::get('/create', 'StudentController@create')->name('create');
Route::post('/create', 'StudentController@store')->name('store');
Route::get('/studentlist', 'StudentController@studentlist')->name('studentlist');
Route::get('/edit', 'StudentController@edit')->name('studentlist');
Route::get('edit/{id}', 'StudentController@editdelete')->name('editdelete');
Route::post('update/{id}', 'StudentController@update')->name('update');
Route::delete('delete/{id}', 'StudentController@delete')->name('delete');

// student route ends

Route::get('/create_lectures', 'LectureController@create_lecture')->name('create_lectures');
Route::post('/create_lectures', 'LectureController@store_lecture')->name('store_lecture');
Route::get('/lecturelist', 'LectureController@lecturelist')->name('lecturelist');
Route::get('/edit_lecture', 'LectureController@edit_lecture')->name('lecturelist');
Route::get('edit_lecture/{id}', 'LectureController@edit2_lecture')->name('edit2_lecture');
Route::post('update_lecture/{id}', 'LectureController@update_lecture')->name('update_lecture');
Route::delete('delete_lecture/{id}', 'LectureController@delete_lecture')->name('delete_lecture');

// grade route
Route::get('/create_grade', 'GradeController@create_grade')->name('create_grade');
Route::post('/create_grade', 'GradeController@store_grade')->name('store_grade');
Route::get('/gradelist', 'GradeController@gradelist')->name('gradelist');

//gradeview
Route::get('/gradeview', 'GradeController@gradeview')->name('gradeview');
Route::get('/gradeviewsingle/{student_id}', 'GradeController@gradeview2')->name('gradeview');
Route::get('/student/{student}','GradeController@results');

//studentview
Route::get('/studentview', 'StudentController@studentview')->name('studentview');
Route::get('/studentviewsingle/{id}', 'StudentController@studentview2')->name('studentview');
Route::get('/lectures', 'LecturesController@index')->name('lectures.show');
