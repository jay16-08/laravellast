<?php
use App\Data;
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

Auth::routes();




Route::get('/admin', 'HomeController@index')->name('home'); 

Route::get('submitroomr', 'HomeController@indexr')->name('submitroomr');
Route::get('submitroomd', 'HomeController@indexd')->name('submitroomd');

Route::get('submitbooking','bookingcController@indexc');






Route::prefix('customer')->group(function(){
    Route::get('/login','Auth\customerloginController@showLoginForm')->name('customer.login');
    Route::post('/login','Auth\customerloginController@login')->name('customer.login.submit');
    Route::post('/checklogin', 'Auth\customerloginController@checklogin');
    #Route::get('/registration', 'Auth\customerloginController@registration')->name('customer.registration');
   
    Route::get('/registration', function () {
        return view('registration');
    })->name('registration');

    Route::post('submitcustomer', 'Auth\customerloginController@registration'); 
    //Route::get('/','customer@index')->name('custome.dashboard');
    Route::resource('customerlogin','Auth\customerloginController');
});

Route::get('/testhome', 'HomeController@test')->name('testhome');

Route::get('/test', 'CrudsController@index')->name('test');
Route::get('/exteas_view/{id}', 'CrudsController@show')->name('exteas_viwe');
Route::get('exteas_delete/{id}', 'CrudsController@destroy')->name('exteas_delete');  
Route::get('/exteas_insert', function () {
    return view('exteas_insert');
})->name('exteas_insert');
Route::post('submit', 'CrudsController@store'); 
Route::get('/exteas_editt/{id}', 'CrudsController@edit')->name('exteas_edit');
Route::get('submiteditexteas/{id}','CrudsController@update')->name('submiteditexteas');
Route::resource('Cruds','CrudsController');



Route::get('/customers', 'customersController@index')->name('customers');
Route::get('/customer_view/{id}', 'customersController@show')->name('customer_view');
Route::get('/customer_delete/{id}', 'customersController@destroy')->name('customer_delete');
Route::get('/customer_insert', 'customersController@viewcus')->name('customer_insert');
Route::post('submitcustomer', 'customersController@store'); 
Route::resource('customer','customersController');

Route::get('/rooms', 'roomController@index')->name('rooms');
Route::get('/room_view/{id}', 'roomController@show')->name('room_view');
Route::get('/room_delete/{id}', 'roomController@destroy')->name('room_delete');
Route::get('/room_insert', function () {
    return view('room_insert');
})->name('room_insert');
Route::post('submitroom', 'roomController@store');
Route::resource('room','roomController');
Route::get('/room_edit/{id}', 'roomController@edit')->name('room_edit');
Route::get('submiteditroom/{id}','roomController@update')->name('submiteditroom');


Route::get('/room_types', 'roomtypeController@index')->name('room_types');
Route::get('/roomtypes_view/{id}', 'roomtypeController@show')->name('roomtypes_view');
Route::get('/roomtype_delete/{id}', 'roomtypeController@destroy')->name('roomtype_delete');
Route::get('/roomtype_insert', function () {
    return view('roomtype_insert');
})->name('roomtype_insert');
Route::post('submitroomtype', 'roomtypeController@store');
Route::resource('roomtype','roomtypeController');
Route::get('/roomtype_edit/{id}', 'roomtypeController@edit')->name('roomtype_edit');
Route::get('submiteditroomtype/{id}','roomtypeController@update')->name('submiteditroomtype');


Route::get('/bookings', 'bookingController@index')->name('bookings');
Route::get('/booking_view/{id}', 'bookingController@show')->name('booking_view');
Route::get('/booking_delete/{id}', 'bookingController@destroy')->name('booking_delete');
Route::resource('bookings', 'bookingController');



Route::get('about', 'TestController@about')->name('about');

Route::get('/bookingc','bookingcController@index')->name('bookingc');

/* Route::get('/customerindex', function () {
    return view('index');
})->name('customerindex'); */



Route::get('/customerindex','bookingcController@indexch')->name('customerindex');
Route::get('checkrooma','bookingcController@checkrooma')->name('checkrooma');


Route::get('/customerroom', function () {
    return view('roomsc');
})->name('customerroom');


Route::get('/customerimage', function () {
    return view('customerimage');
})->name('customerimage');


Route::get('/customerabout', function () {
    return view('aboutc');
})->name('customerabout');


Route::get('/customercontact', function () {
    return view('contactc');
})->name('customercontact');


Route::get('/customerindex', function () {
    return view('indexc');
})->name('customerindex');

Route::get('/history','historyController@index')->name('history');
Route::get('/booking_deletec/{id}', 'historyController@destroy')->name('booking_deletec');
