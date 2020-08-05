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