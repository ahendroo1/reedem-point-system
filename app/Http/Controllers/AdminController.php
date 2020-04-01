<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
            
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
        
    }
    //

    public function trophy(){
        $coupon_category = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->get();
        return view('trophy', ['coupon_category' => $coupon_category]);
    }

    public function coupon(){
        $coupon_category = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->get();
        return view('coupon', ['coupon_category' => $coupon_category]);
    }
}
