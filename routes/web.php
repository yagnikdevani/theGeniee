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

Route::get('/', function () {
    return view('default');
});


Route::group(['prefix' => 'merchant'], function () {
    //Route::get('/registration', 'MerchantController@registration');
    Route::get('registration',['as' => 'merchant_registration', 'uses' => 'MerchantController@registration']);
    Route::post('/registration', ['as' => 'merchant_registration_save', 'uses' => 'MerchantController@saveRegistrationForm']);

    //Route::get('about-us',['as' => 'about_us', 'uses' => 'HomeController@aboutUs']);
    
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
