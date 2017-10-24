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

Route::get('/', 'UserController@index');
Route::get('Calendar', 'AppointmentController@calendar');
Route::Resource('Portal', 'AdminController');
Route::Resource('Users', 'UserController');
Route::Resource('Products', 'ProductController');
Route::Resource('Labs', 'LabController');
Route::Resource('Typelens', 'TypelensController');
Route::Resource('Lens', 'LenseController');
Route::Resource('Orders', 'OrderController');
Route::Resource('Clients', 'ClientController');
Route::Resource('Appointments', 'AppointmentController');
Route::get('/JsonCliente', 'ClientController@jsonCliente');
Route::get('/JsonMedicalHistory', 'MedicalhistoryController@jsonMedicalHistory');

Route::get('pdf', 'AdminController@pdf');
