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



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');



Route::group(['prefix'=>'admin','namespace'=>'Backend'],function(){  
//  Auth::routes();
  Route::get('/','AdminController@index')->name('adminHome');   
  Route::get('/showLoginForm','Auth\LoginController@showLoginForm')->name('showLoginForm'); 
  Route::post('/adminLogin','Auth\LoginController@login')->name('adminLogin'); 
  Route::post('/adminRegister','Auth\RegisterController@register')->name('adminRegister'); 
  Route::get('/showRegistrationForm','Auth\RegisterController@showRegistrationForm')->name('showRegistrationForm'); 
  
  Route::post('/adminSendResetLinkEmail','Auth\ForgotPasswordController@sendResetLinkEmail')->name('adminSendResetLinkEmail'); 
  Route::get('/adminShowLinkRequestForm','Auth\ForgotPasswordController@showLinkRequestForm')->name('adminShowLinkRequestForm'); 
  Route::post('/adminSendResetLinkEmail','Auth\ResetPasswordController@reset')->name('adminSendResetLinkEmail'); 
  Route::get('/sendResetLinkEmail{adminSendResetLinkEmail}','Auth\ResetPasswordController@showResetForm')->name('adminShowResetForm'); 
//  Route::get(trans('routes.myobjects'),'BackendController@myobjects')->name('myObjects');  
    
    
});