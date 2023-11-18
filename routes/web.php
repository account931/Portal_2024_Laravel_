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


//All users list  (Controller is in subfolder)
Route::get('/EloquentExample',  'PortalUsers\PortalUserss@allUsersList')->name('EloquentExample2');  //Active Record Eloquent example Route
Route::get('/showOneUser/{id}', 'PortalUsers\PortalUserss@showOne')->name('showOneUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
