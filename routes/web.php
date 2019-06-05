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
*

Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'pageController@index');
Route::get('/about', 'pageController@about');
Route::get('/sub', 'pageController@sub');
Route::post('sub/register', 'pageController@register')->name('sub.register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('todo/store', 'todoController@store')->name('todostore');
Route::get('todo/{id}/edit', 'todoController@edit')->name('todo.edit');
Route::put('todo/{id}/update', 'todoController@update')->name('todo.update');
Route::delete('todo/{id}', 'todoController@delete')->name('todo.delete');
Route::get('sub/viewall', 'pageController@viewall')->name('sub.view_all');
Route::get('sub/viewall/{id}', 'pageController@show')->name('viewindividual');