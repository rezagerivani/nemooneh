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


Route::group(['middleware' => 'needlogin'], function () {
    Route::get('/',  "StudentsController@new");
    Route::get('register', "StudentsController@new");
    Route::post('post','StudentsController@post');
});
Route::get('login/{registration_code?}/{registration_password?}', 'StudentsController@login');

Route::get('logoff','SixthsController@logoff');
Route::post('checklogin','SixthsController@checklogin');
Route::get('success/{id?}','StudentsController@success');
Route::get('barcode/{id?}','StudentsController@barcode');


// Pay.ir
Route::get('/payir/form', 'PayirTransactionController@showForm');
Route::post('/payir/form', 'PayirTransactionController@submitForm');
Route::get('/payir/callback', 'PayirTransactionController@callback');
//

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
