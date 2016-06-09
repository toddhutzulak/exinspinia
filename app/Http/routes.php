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

Route::get('/', 'PageController@getIndex');
Route::get('about-us', 'PageController@getAboutUs');
Route::get('terms-of-use', 'PageController@getTermsOfUse');

Route::get('wireframe/calendar', 'PageController@getCalendar');
Route::get('wireframe/full-width', 'PageController@getFullWidth');
Route::get('wireframe/sidebar', 'PageController@getSidebar');

/* PROFILES */
Route::get('profile/agent/bill-murray', 'PageController@getProfileAgentBillMurray');
Route::get('profile/supplier/cruise', 'PageController@getProfileSupplierCruise');
Route::get('profile/supplier/hotel', 'PageController@getProfileSupplierHotel');

/* PRODUCTS */
Route::get('product/cruise/itinerary', 'PageController@getProductCruiseItinerary');
Route::get('product/hotel/listing', 'PageController@getProductHotelListing');





