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
Route::get('/admin', 'PlatformController@admin_index');
Route::get('/admin/loans', 'PlatformController@admin_loans_index');
Route::get('/export', 'PlatformController@export')->name('export');

Route::post('/admin/loans', 'PlatformController@admin_loans_choose');
// Route::get('/admin/loans/detail', 'PlatformController@admin_loans_detail');

Route::get('/admin/loans/{event}','PlatformController@admin_loans_detail');

Route::get('/admin/claims', 'PlatformController@admin_claims_index');
Route::get('/admin/claim_repayments', 'PlatformController@admin_claim_repayments');