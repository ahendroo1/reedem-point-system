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


Route::get('/', 'CouponController@createcategory');

Route::get('/reedem', 'IndexController@reedem');
Route::post('/create-category', 'CouponController@createcategory');

Route::get('/admin-trophy', 'AdminController@trophy');
Route::get('/admin-coupon', 'AdminController@coupon');


Route::get('/delete-category-coupon/{id}', 'CouponController@deletecategory');