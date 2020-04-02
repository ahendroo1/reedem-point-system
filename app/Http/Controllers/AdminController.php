<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function cookiecheck($page, $data)
    {
            
        if (!isset($_COOKIE['xf_user'])) {
            # code...
            return redirect('../../login');
        }


        $xf_user = $_COOKIE['xf_user']; 
        $output = explode(",", $xf_user);
        $id = $output[0];


        $xf_user = DB::table('xf_user')->where('user_id', $id)->first();
        if($xf_user->is_admin < 1){
            return redirect('/');
        }

        return view($page, $data);
        
    }
    //

    public function trophy(){
        
        $tier = DB::table('xf_coupon_tier')->orderBy('coupon_tier_id', 'desc')->get();

        $data = ['tier' => $tier];
        return $this->cookiecheck('trophy', $data);
        
    }

    public function coupon(){

        $coupon_category = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->get();
        $tier = DB::table('xf_coupon_tier')->orderBy('coupon_tier_id', 'desc')->get();

        $coupon = DB::table('xf_coupon')
            ->join('xf_coupon_category', 'xf_coupon_category.coupon_category_id', '=', 'xf_coupon.coupon_category_id')
            ->join('xf_coupon_tier', 'xf_coupon_tier.coupon_tier_id', '=', 'xf_coupon.coupon_tier_id')
            ->select('xf_coupon.*', 'xf_coupon_category.*', 'xf_coupon_tier.*')
            ->get();

        $data = ['coupon_category' => $coupon_category, 'tier' => $tier, 'coupon' => $coupon];
        return $this->cookiecheck('coupon', $data);

    }
}
