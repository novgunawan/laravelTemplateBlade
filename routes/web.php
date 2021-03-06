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
    return view('table.taskTable');
});

Route::get('/master', function(){
    return view('adminLTE.master');
});

Route::get('/data-tables', function () {
    return view('table.dataTable');
});

// Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');

// Route::get('/pertanyaan/create','PertanyaanController@create');

// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');

// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');

// Route::post('/pertanyaan', 'PertanyaanController@store');

// Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');
// //Route :: namaMethod
// Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');

//Route resources

Route::resource('pertanyaan', 'PertanyaanController');