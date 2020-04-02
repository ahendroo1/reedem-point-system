<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function cookiecheck($page, $data)
    {

        if (!isset($_COOKIE['xf_user'])) {
            return redirect('../../login');
        }

        $xf_user = $_COOKIE['xf_user']; 
        $output = explode(",", $xf_user);
        $id = $output[0];

        $xf_user = DB::table('xf_user')->where('user_id', $id)->first();

        if($xf_user->is_admin > 0){
            return redirect('/admin-trophy');
        }
        return view($page, $data);
        
    }
    public function index(){

        $category = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->get();
        $tier = DB::table('xf_coupon_tier')->orderBy('coupon_tier_id','desc')->get();
        $coupon_first = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->first();

        return $this->cookiecheck('index', ['category' => $category, 'tier' => $tier, 'coupon_first' => $coupon_first]);
        // return view('index');
    }

    public function reedem(){
        
        return view('reedem');
    }
}
 