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
Route::get('/customers/{customerID}', 'customer_controller@getting_data_with_customerID');
Route::get('/customers/phone/{phoneNumber}', 'customer_controller@getting_data_with_phoneNumber');
Route::get('/customers/add_new/{CFName}/{CLName}/{CAddress}/{CCity}/{CState}/{CZipCode}/{CEmail}/{CPhone}/{CMemberType}/{UseSalonCardId}', 'customer_controller@creating_new_customer_info');

#Customer CheckIn Data
Route::get('/customercheckin', 'customerCheckIn_controller@index');
Route::get('/customercheckin/{payType}', 'customerCheckIn_controller@getting_data_with_paytype');
Route::get('/customercheckin/add_new/{OfCustomerID}/{CIType}/{CIStatus}/{AtSalonID}/{ServedByEmployeeID}/{CITipToEmployee}/{CITotalFeeWithoutTip}/{CIPayType}', 'customerCheckIn_controller@creating_new_customerCheckIn_info');

#Customer CheckIn Order Data
Route::get('/customercheckinorder', 'customerCheckInOrder_controller@index');
Route::get('/customercheckinorder/{serviceID}', 'customerCheckInOrder_controller@getting_data_with_serviceid');
Route::get('/customercheckinorder/add_new/{CheckInID}/{ServiceID}/{Quantity}/{DiscountPercent}/{PaidPrice}/{Note}', 'customerCheckInOrder_controller@creating_new_customerCheckInOrder_info');

#Employee Data
Route::get('/employees', 'employee_controller@index');
Route::get('/employees/store/{storeID}', 'employee_controller@getting_data_with_storeID');
Route::get('/employees/{employeeID}', 'employee_controller@getting_data_with_employeeID');

#Login Account Data
Route::get('/loginaccount', 'loginaccount_controller@index');
Route::get('/loginaccount/{LID}', 'loginaccount_controller@getting_data_with_loginaccountID');
Route::get('/loginaccount/belongto/{employeeID}', 'loginaccount_controller@getting_data_with_employeeID');

#Login Tracking Data
Route::get('/logintracking', 'logintracking_controller@index');
// Route::get('/loginaccount/{employeeID}', 'loginaccount_controller@getting_data_with_employeeID');
Route::get('/logintracking/add_new/{LID}', 'logintracking_controller@creating_new_logintracking_record');

#Manager Data
Route::get('/managers', 'manager_controller@index');
Route::get('/managers/store/{storeID}', 'manager_controller@getting_data_with_storeID');
Route::get('/managers/{employeeID}', 'manager_controller@getting_data_with_employeeID');

#Salon Card Data
Route::get('/saloncards', 'saloncard_controller@index');
Route::get('/saloncards/{CardID}', 'saloncard_controller@getting_data_with_id');
Route::get('/saloncards/employee/{CardNumber}', 'saloncard_controller@getting_data_with_employee_CardNumber');
Route::get('/saloncards/customer/{CardNumber}', 'saloncard_controller@getting_data_with_customer_CardNumber');


#Salon Service Data
Route::get('/salonservices', 'salonservice_controller@index');
// Route::get('/manager/{storeID}', 'manager_controller@getting_data_with_storeID');

#Salon Store Data
Route::get('/salonstores', 'salonstore_controller@index');
Route::get('/salonstores/{storeID}', 'salonstore_controller@getting_data_with_storeID');

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
