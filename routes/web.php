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

Route::get('/', 'FrontwebController@index');

Auth::routes();

// Route::get('/home', function () {
// return view('home');
// });

// Frontweb--------------------------------------------------------------------------------

Route::get('/hometest', 'FrontwebController@index')->name('landing');
Route::post('/hometest', 'FrontwebController@update');

Route::get('/about', 'FrontwebController@about_index');
Route::get('/about/finance', 'FrontwebController@about_index_finance');
Route::get('/about/news', 'FrontwebController@about_index_news');

Route::get('/operation', 'FrontwebController@operation_index');
Route::get('/operation/faq', 'FrontwebController@operation_faq');

Route::get('/claim_category', 'FrontwebController@claim_category_index');
Route::get('/claim_category_special', 'FrontwebController@claim_category_special');

Route::get('/loan', 'FrontwebController@loan_index');

// Frontweb--------------------------------------------------------------------------------

Route::get('/admin', 'PlatformController@admin_index');
Route::get('/admin/loans', 'PlatformController@admin_loans_index');
Route::get('/export', 'PlatformController@export')->name('export');

Route::post('/admin/loans', 'PlatformController@admin_loans_choose');
// Route::get('/admin/loans/detail', 'PlatformController@admin_loans_detail');

Route::get('/admin/loans/{event}','PlatformController@admin_loans_detail');

// claims--------------------------------------------------------------------------------
Route::get('/admin/claims', 'PlatformController@admin_claims_index');
Route::get('/admin/claim_repayments', 'PlatformController@admin_claim_repayments');


// roles--------------------------------------------------------------------------------
Route::get('/admin/roles', function(){ return view('roles.roles');});
Route::get('/admin/resource_items', function(){ return view('roles.resource_items');});
Route::get('/admin/action_items', function(){ return view('roles.action_items');});
Route::get('/admin/permissions', function(){ return view('roles.permissions');});
Route::get('/admin/role_permissions',function(){ return view('roles.role_permissions');});

// tender_documents--------------------------------------------------------------------------------
Route::get('/admin/tender_documents', 'PlatformController@admin_tender_documents_index');
Route::get('/admin/tender_detail', 'PlatformController@admin_tender_detail_index');

// internal_letters--------------------------------------------------------------------------------
Route::get('/admin/internal_letters', 'PlatformController@admin_internal_letters_index');

// match_performances--------------------------------------------------------------------------------
Route::get('/admin/match_performances/new', 'MatchController@index');
Route::post('/admin/match_performances/new', 'MatchController@update_submit');

// internal_letters--------------------------------------------------------------------------------
Route::get('/admin/internal_letters', 'PlatformController@admin_internal_letters_index');

// roi_settings--------------------------------------------------------------------------------
Route::get('/admin/roi_settings', 'SettingController@index');

// users/staff--------------------------------------------------------------------------------
Route::get('/admin/users', 'AdminUsersController@index');
Route::get('/admin/staffs', 'AdminStaffsController@index');

// web_category--------------------------------------------------------------------------------
Route::get('/admin/web_contents/web_category', 'CategoryController@index');

