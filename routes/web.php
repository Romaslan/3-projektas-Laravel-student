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

Route::get('/', function () {
    return view('welcome');
});

//Students
Route::prefix('students')->group(function() {

    Route::get('', 'App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    Route::post('store', 'App\Http\Controllers\StudentController@store' )->name('student.store');
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    // Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy' )->name('company.destroy');
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');

});

//attendensGroup
Route::prefix('attendancegroup')->group(function() {

    Route::get('', 'App\Http\Controllers\AttendanceGroupController@index')->name('attendancegroup.index');
    // Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    // Route::post('store', 'App\Http\Controllers\StudentController@store' )->name('student.store');
     Route::get('edit/{attendancegroup}', 'App\Http\Controllers\AttendanceGroupController@edit')->name('attendancegroup.edit');
    // Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    // // Route::post('destroy/{company}', 'App\Http\Controllers\CompanyController@destroy' )->name('company.destroy');
    // Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
