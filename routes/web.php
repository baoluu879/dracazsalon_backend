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
use App\Http\Controllers\customer_controller;

Route::get('/', function () {
    return view('welcome');
});

#Customer Data
Route::get('/customers', 'customer_controller@index');
Route::get('/customers/{phoneNumber}', 'customer_controller@getting_data_with_phoneNumber');

#Customer CheckIn Data
Route::get('/customercheckin', 'customerCheckIn_controller@index');
Route::get('/customercheckin/{payType}', 'customerCheckIn_controller@getting_data_with_paytype');

#Customer CheckIn Order Data
Route::get('/customercheckinorder', 'customerCheckInOrder_controller@index');
Route::get('/customercheckinorder/{serviceID}', 'customerCheckInOrder_controller@getting_data_with_serviceid');

#Employee Data
Route::get('/employees', 'employee_controller@index');
Route::get('/employees/{storeID}', 'employee_controller@getting_data_with_storeID');

#Login Account Data
Route::get('/loginaccount', 'loginaccount_controller@index');
Route::get('/loginaccount/{employeeID}', 'loginaccount_controller@getting_data_with_employeeID');

#Login Tracking Data
Route::get('/logintracking', 'logintracking_controller@index');
// Route::get('/loginaccount/{employeeID}', 'loginaccount_controller@getting_data_with_employeeID');

#Manager Data
Route::get('/managers', 'manager_controller@index');
Route::get('/managers/{storeID}', 'manager_controller@getting_data_with_storeID');

#Salon Card Data
Route::get('/saloncards', 'saloncard_controller@index');
Route::get('/saloncards/employee/{ID}', 'saloncard_controller@getting_data_with_employeeID');
Route::get('/saloncards/customer/{ID}', 'saloncard_controller@getting_data_with_customerID');
Route::get('/saloncards/{CardID}', 'saloncard_controller@getting_data_with_CardNumber');

#Salon Service Data
Route::get('/salonservices', 'salonservice_controller@index');
// Route::get('/manager/{storeID}', 'manager_controller@getting_data_with_storeID');

#Salon Store Data
Route::get('/salonstores', 'salonstore_controller@index');
// Route::get('/manager/{storeID}', 'salonstore_controller@getting_data_with_storeID');

#Service Category Data
Route::get('/servicecategories', 'servicecategory_controller@index');
// Route::get('/manager/{storeID}', 'salonstore_controller@getting_data_with_storeID');

#Treatment Data
Route::get('/treatments', 'treatment_controller@index');
// Route::get('/treatment/{storeID}', 'treatment_controller@getting_data_with_storeID');

#Treatment Data
Route::get('/treatmenttypes', 'treatmenttype_controller@index');
// Route::get('/treatment/{storeID}', 'treatment_controller@getting_data_with_storeID');

#Services Package Data
Route::get('/servicespackages', 'servicespackage_controller@index');
Route::get('/servicespackages/{price}', 'servicespackage_controller@getting_data_with_price');

#Service Package Detail Data
Route::get('/servicespackagedetails', 'servicespackagedetail_controller@index');
Route::get('/servicespackagedetails/salonservice/{ID}', 'servicespackagedetail_controller@getting_data_with_salonserviceID');
Route::get('/servicespackagedetails/treatmentorder/{ID}', 'servicespackagedetail_controller@getting_data_with_treatmentOrder');

#Testing With Relationship
Route::get('/servicespackagedetails/relationship', 'servicespackagedetail_controller@getting_all_data_with_relationship');
