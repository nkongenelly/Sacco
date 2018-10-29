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

// Route::get('/', function () {
//     return view('layouts.master');
// });

//user routes
Route::get('/adduser', 'UserController@create');
Route::post('/adduser', 'UserController@store');
Route::get('/users', 'UserController@index');
Route::get('/users/edit/{userId}', 'UserController@edit');
Route::patch('/users/{userId}', 'UserController@update');
Route::patch('/usersdelete/{userId}', 'UserController@destroy');
Route::get('/loggedusers', 'UserController@loggedUser');

//next of kin
Route::get('/nextofkin', 'NextofKinController@index');
Route::post('/kin', 'NextofKinController@store');
Route::get('/nextofkin/create/{id}', 'NextofKinController@create');
Route::get('/nextOfKin/edit/{id}', 'NextofKinController@edit');
Route::patch('/nextOfKin/{id}', 'NextofKinController@update');
Route::get('/nextOfKin/delete/{id}','NextofKinController@destroy');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admins','HomeController@adminHome');

//role routes
Route::get('/roles', 'RoleController@index');
Route::get('/role/create', 'RoleController@create');
Route::get('/roles/edit/{id}', 'RoleController@edit');
Route::post('/roles', 'RoleController@store');
Route::post('/userrole/{id}', 'RoleController@storeUserRole');
Route::patch('/roles/{id}', 'RoleController@update');
Route::patch('/roles/{id}', 'RoleController@destroy');

//Loans routes
Route::get('/loanApplication', 'LoanController@index' );
Route::get('/searchMember/{member}', 'LoanController@create' );
Route::get('/loanApplication/{id}', 'LoanController@createLoan' );
Route::post('/loansCreate', 'LoanController@store' );
        //disburse Loan
Route::get('/disburseLoan', 'LoanDisbursmentController@index' );
        //Loan Amortization
Route::get('/amortization', 'LoanAmortizationController@index' );
// Route::get('/amortizationSearch/{name}', function(){
//     dd('yes');
// } );
Route::get('/amortizationSearch/{name}', 'LoanAmortizationController@create' );
Route::get('/fetchLoans/{id}', 'LoanAmortizationController@fetchLoans' );
//members
Route::get('/members', 'MemberController@index');
Route::get('/members/create', 'MemberController@create');
Route::post('/members', 'MemberController@store');
Route::get('/members/edit/{id}','MemberController@edit' );
Route::patch('/members/{id}', 'MemberController@update');
Route::get('/members/delete/{id}', 'MemberController@destroy');

//member documents
Route::get('/documents', 'MemberdocumentController@index');
Route::get('/documents/create/{id}', 'MemberdocumentController@create');
Route::post('/documents', 'MemberdocumentController@store');
Route::get('/documents/edit/{id}','MemberdocumentController@edit');
Route::patch('/documents/{id}', 'MemberdocumentController@update');
Route::get('/documents/delete/{id}','MemberdocumentController@destroy');
// Savings routes
Route::get('/savings', 'SavingController@index');
Route::get('/savings/create', 'SavingController@create');
Route::post('/savings', 'SavingController@store');
Route::get('/savings/edit/{id}', 'SavingController@edit');
Route::patch('/savings/{id}', 'SavingController@update');
Route::get('/savings/delete/{id}', 'SavingController@destroy');

