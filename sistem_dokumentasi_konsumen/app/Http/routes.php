<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login',['as'=>'login','uses'=>'CustomerController@login']);
Route::get('/data-buku',['as'=>'data-buku','uses'=>'CustomerController@data_buku']);
Route::get('/kelas-1',['as'=>'kelas-1','uses'=>'CustomerController@kelas_1']);
Route::get('/kelas-2',['as'=>'kelas-2','uses'=>'CustomerController@kelas_2']);
Route::get('/kelas-3',['as'=>'kelas-3','uses'=>'CustomerController@kelas_3']);
Route::get('/index',['as'=>'index','uses'=>'CustomerController@index']);
Route::get('/create-customer',['as'=>'create','uses'=>'CustomerController@create']);
Route::post('/create-customer','CustomerController@create_post');
Route::get('/get-customer', ['as'=>'get','uses'=>'CustomerController@get']);
Route::get('/edit-customer/{id}', ['as'=>'edit','uses'=>'CustomerController@edit']);
Route::post('/edit-customer/{id}', ['as'=>'edit_post','uses'=>'CustomerController@edit_post']);
Route::get('/delete-customer/{id}', ['as'=>'delete','uses'=>'CustomerController@delete']);

