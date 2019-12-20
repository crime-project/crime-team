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

Route::get('/missing-persons', 'PeopleController@index');

Route::get('/missing-person-table', 'PeopleController@persontable')->name('show');

Route::get('/missing-person-ui', 'Crimecontroller@personui');

Route::get('/missing-items', 'Crimecontroller@items');

Route::get('/missing-items-table', 'itemController@index')->name('itemstable');

Route::get('/missing-item-ui', 'Crimecontroller@itemui');

Route::get('/missing-vehicles', 'Crimecontroller@vehicles');

Route::get('/missing-vehicles-table', 'vehicleController@index')->name('vehiclestable');

Route::get('/missing-vehicle-ui', 'Crimecontroller@vehicleui');

Route::get('/registered-user-table', 'Crimecontroller@registereduser');

Route::get('/most-wanted-criminals-table', 'Crimecontroller@criminalstable');

Route::get('/most-wanted-criminals-ui', 'Crimecontroller@criminalsui');

Route::get('/most-wanted-criminals', 'Crimecontroller@criminal');

Route::get('/date-time', 'Crimecontroller@datetime');

Route::get('/crime-reporting', 'Crimecontroller@crimereporting');


//crud routs
Route::resource('lostitem', 'itemController');

//Route::get('lostitem-edit', 'itemController@edit');

//Route::post('lostitem-update/{id}', 'itemController@update');

Route::resource('people', 'PeopleController');

//Route::post('lostvehicle', 'vehicleController@store');

Route::resource('lostvehicle', 'vehicleController');

Route::get('lostvehicle-edit/{id}', 'vehicleController@edit');

Route::post('lostvehicle-update/{id}', 'vehicleController@update');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');




Route::get('/item-table', 'Crimecontroller@crimtable');


Route::get('/crimetest', 'Crimecontroller@crimetest');

