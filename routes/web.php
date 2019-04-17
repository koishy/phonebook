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
    return redirect("/contacts");
});


Route::get('/contacts', 'ContactsController@index');
Route::get('/contacts/add', 'ContactsController@add');
Route::post('/contacts/add', 'ContactsController@store');
Route::get('/contacts/all', 'ContactsController@all');
