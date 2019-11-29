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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/test', function () {
    return view('crime-view.test');
});

Auth::routes();

Route::get('/', 'Crimecontroller@dashboard');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/missing-persons', 'Crimecontroller@persons');

Route::get('/missing-person-table', 'Crimecontroller@persontable');

Route::get('/missing-person-ui', 'Crimecontroller@personui');

Route::get('/missing-items', 'Crimecontroller@items');

Route::get('/missing-items-table', 'Crimecontroller@itemstable');

Route::get('/missing-item-ui', 'Crimecontroller@itemui');

Route::get('/missing-vehicles', 'Crimecontroller@vehicles');

Route::get('/missing-vehicles-table', 'Crimecontroller@vehiclestable');

Route::get('/missing-vehicle-ui', 'Crimecontroller@vehicleui');

Route::get('/registered-user-table', 'Crimecontroller@registereduser');

Route::get('/most-wanted-criminals-table', 'Crimecontroller@criminalstable');

Route::get('/most-wanted-criminals-ui', 'Crimecontroller@criminalsui');

Route::get('/most-wanted-criminals', 'Crimecontroller@criminal');
