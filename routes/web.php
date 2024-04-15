<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebsiteController@index')->name('home');
Route::post('/', 'PatientController@store')->name('patient.store');

Route::post('/c', 'WebsiteController@contact_store')->name('contact_us.store');
require __DIR__.'/auth.php';

// Admin Panel Route
Route::group(['prefix' => '/admin','middleware' => ['auth']], function(){
  Route::get('/', 'AdminController@index')->middleware(['auth'])->name('admin');
  //Disease

  Route::get('add/disease', 'AdminController@disease_create')->name('admin.add_disease');
  Route::post('store/disease', 'AdminController@disease_store')->name('admin.store_disease');
  Route::get('view/disease', 'AdminController@disease_view')->name('admin.view_disease');
  Route::get('delete/disease/{id}', 'AdminController@delete_disease')->name('admin.delete_disease');
  
  //Users
  Route::get('user', 'UserController@index')->name('admin.user');
  Route::get('add/user', 'UserController@create')->name('user.create');
  Route::post('user/store', 'UserController@store')->name('user.store');
  
  Route::get('user/view/{id}', 'UserController@view')->name('user_view');
  Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
  Route::post('user/update/{id}', 'UserController@update')->name('user.update');
  Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete');
  


  // Doctor Create

  Route::get('doctor/add', 'AdminController@create')->name('doctor.create');
  Route::post('doctor/add', 'AdminController@store')->name('doctor.store');
  Route::get('doctor/view', 'AdminController@view_list')->name('doctor.view_list');
  Route::get('doctor/profile/{id}', 'AdminController@view_profile')->name('doctor.view_profile');
  Route::get('edit/profile/{id}', 'AdminController@edit_profile')->name('edit_profile');
  Route::post('update/profile/{id}', 'AdminController@update_profile')->name('update_profile');
  Route::get('delete/doctor/{id}', 'AdminController@delete_doctor')->name('delete_doctor');





  //Doctor Assigned
  Route::get('assign/doctor/{id}', 'AdminController@assigned_create')->name('admin.assigned_doctor_create');
  Route::post('assign/doctor/{id}', 'AdminController@assigned_store')->name('admin.assigned_doctor_store');

  //Patient List
  Route::get('patient/list/', 'PatientController@list')->name('patient.list');
  Route::get('patient/profile/{id}', 'PatientController@details')->name('patient.profile');
  Route::get('patient/reports/{id}', 'DoctorController@reports')->name('patient.reports');
  Route::get('patient/activities/{id}', 'DoctorController@activities')->name('patient.activities');
  Route::get('patient/prescription/{id}', 'DoctorController@create_prescription')->name('patient.create_prescription');
  Route::post('patient/prescription/{id}', 'DoctorController@store_prescription')->name('patient.store_prescription');
  Route::get('delete/profile/{id}', 'AdminController@delete_patient')->name('delete_patient');
  Route::get('patient/billing/list/', 'PatientController@billing_list')->name('patient.billing_list');
  Route::get('delete/bill/{id}', 'PatientController@delete_bill')->name('delete_bill');
  
  //Contacts

  Route::get('contacts', 'WebsiteController@contact_list')->name('contact_list');
  Route::get('contacts/view/{id}', 'WebsiteController@contact_view')->name('contact_view');
  Route::get('contacts/delete/{id}', 'WebsiteController@contact_delete')->name('contact_delete');


});



//Doctor Panel Route

Route::prefix('/doctor')->middleware(['doctor'])->name('doctor.')->group(function(){


  Route::get('/profile', 'DoctorController@profile')->name('profile');
  Route::get('edit/profile/{id}', 'DoctorController@edit_profile')->name('edit_profile');
  Route::post('update/profile/{id}', 'DoctorController@update_profile')->name('update_profile');
  Route::get('edit/password', 'DoctorController@edit_password')->name('edit_password');
  Route::post('update/password', 'DoctorController@update_password')->name('update_password');

  //patient  
  Route::get('patient/list', 'DoctorController@patient_list')->name('assign_patient');
  Route::get('patient/profile/{id}', 'PatientController@details')->name('patient.profile');
  Route::get('patient/reports/{id}', 'DoctorController@reports')->name('patient.reports');
  Route::get('patient/activities/{id}', 'DoctorController@activities')->name('patient.activities');
  Route::get('patient/prescription/{id}', 'DoctorController@create_prescription')->name('patient.create_prescription');
  Route::post('patient/prescription/{id}', 'DoctorController@store_prescription')->name('patient.store_prescription');
  Route::get('patient/view/prescription/{id}', 'DoctorController@view_prescription')->name('patient.view_prescription');
  Route::get('patient/edit/prescription/{id}', 'DoctorController@edit_prescription')->name('patient.edit_prescription');
  
  Route::post('patient/update/prescription/{id}', 'DoctorController@update_prescription')->name('patient.update_prescription');
  Route::get('patient/delete/prescription/{id}', 'DoctorController@delete_prescription')->name('patient.delete_prescription');




});




// Patient Panel Route
Route::group(['prefix' => '/patient','middleware' => ['patient']], function(){
  Route::get('edit/profile/{id}', 'PatientController@edit_profile')->name('patient.edit_profile');
  Route::post('update/profile/{id}', 'PatientController@update_profile')->name('patient.update_profile');
  Route::get('report/', 'PatientController@report_create')->name('patient.report');
  Route::post('report/', 'PatientController@report_store')->name('patient.reportstore');
  Route::get('activities/', 'PatientController@activities_index')->name('daily_activities');
  Route::get('add/activities/', 'PatientController@activities_create')->name('patient.activities');
  Route::post('activities/', 'PatientController@activities_store')->name('patient.activitiesstore');
  Route::get('edit/activities/{id}', 'PatientController@activities_edit')->name('patient.edit_activities');
  Route::post('update/activities/{id}', 'PatientController@activities_update')->name('patient.activitiesupdate');
  Route::get('prescription', 'PatientController@prescription_view')->name('patient.prescription_view');






  Route::get('doctor/profile/{id}', 'AdminController@view_profile')->name('view_profile');

  //Billing System
  Route::get('/checkout', 'PatientController@bill_checkout')->name('patient.billing');
  Route::post('/bill_store', 'PatientController@bill_store')->name('patient.billing_store');

  

});

