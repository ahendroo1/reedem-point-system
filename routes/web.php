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


Route::get('/', 'IndexController@index');

Route::get('/reedem', 'IndexController@reedem');
Route::post('/create-category', 'CouponController@createcategory');
Route::post('/update-category/{id}', 'CouponController@updatecategory');
Route::post('/create-coupon', 'CouponController@createcoupon');
Route::post('/coupon-update/{id}', 'CouponController@updatecoupon');
Route::get('/getcouponbycategoryid/{id}', 'CouponController@getcouponbycategoryid');
Route::get('/getcouponid/{id}', 'CouponController@getcouponid');


Route::get('/edit-coupon/{id}', 'CouponController@editcoupon');

Route::post('/create-tier', 'TrophyController@createtier');
Route::post('/update-tier/{id}', 'TrophyController@updatetier');

Route::get('/delete-tier/{id}', 'TrophyController@deletetier');
Route::get('/delete-coupon/{id}', 'CouponController@deletecoupon');

Route::get('/admin-trophy', 'AdminController@trophy');
Route::get('/admin-coupon', 'AdminController@coupon');


Route::get('/delete-category-coupon/{id}', 'CouponController@deletecategory');