<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('employee', 'EmployeeController');

Route::get('/', 'EmployeeController@index')->name('employee.index');

Route::get('/create', 'EmployeeController@create')->name('employee.create');

Route::post('/', 'EmployeeController@store')->name('employee.store');

Route::get('/{employee}', 'EmployeeController@show')->name('employee.show');

Route::get('/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');

Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');

Route::put('/employee/{employee}', 'EmployeeController@update')->name('employee.update');

Route::delete('/employee/{employee}', 'EmployeeController@destroy')->name('employee.destroy');
