<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
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


Route::get('/', function(){

    if (!isset($_COOKIE['xf_user'])) {
        # code...
        return redirect('../../login');
    }


    $xf_user = $_COOKIE['xf_user']; 
    $output = explode(",", $xf_user);
    $id = $output[0];


    $xf_user = DB::table('xf_user')->where('user_id', $id)->first();
    if($xf_user->is_admin > 0){
        return redirect('/admin-trophy');
    } else {
        return view('index');
    }
    
});

Route::get('/reedem', 'IndexController@reedem');

Route::get('/admin-trophy', function(){
    
    if (!isset($_COOKIE['xf_user'])) {
        # code...
        return redirect('../../login');
    }

    $xf_user = $_COOKIE['xf_user']; 
    $output = explode(",", $xf_user);
    $id = $output[0];

    $xf_user = DB::table('xf_user')->where('user_id', $id)->first();
    if($xf_user->is_admin == 1){
        return view('admin');
    } else {
        return redirect('/');
    }
    

});


