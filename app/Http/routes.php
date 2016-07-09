<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',
    [
        'uses'=>'Quotation\UserQuotationController@index'
    ]
);
Route::get('about-us',
    [
        'uses'=>'Quotation\UserQuotationController@aboutus'
    ]
);
Route::get('our-Services',
    [
        'uses'=>'Quotation\UserQuotationController@services'
    ]
);
Route::get('blog',
    [
        'uses'=>'Quotation\UserQuotationController@blog'
    ]
);
Route::get('contact-us',
    [
        'uses'=>'Quotation\UserQuotationController@contact'
    ]
);
//Route::post('store',function(){
//    dd('d');
//});

Route::post('store',
    [
        'uses'=>'Quotation\UserQuotationController@store'
    ]
);

Route::get('site-admin',
    [
        'uses'=>'Quotation\UserQuotationController@admin'
    ]
);
Route::get('table',
    [
        'uses'=>'Quotation\UserQuotationController@table'
    ]
);