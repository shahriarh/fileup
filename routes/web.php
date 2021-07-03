<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



#File Upload
Route::get('/fileupload', 'FileController@create')->name('fileupload.create');
Route::post('/fileupload', 'FileController@store');
Route::get('/fileupload/list', 'FileController@index')->name('fileupload.list');
Route::get('/fileupload/list/edit', 'FileController@update');
Route::get('/fileupload/delete/{id}', 'FileController@delete');





#category
Route::get('/create', 'CategoryController@create')->name('category.create');
Route::post('/create', 'CategoryController@store');
Route::get('/category/list', 'CategoryController@index')->name('category.list');
Route::get('/category/list/edit', 'CategoryController@update');
