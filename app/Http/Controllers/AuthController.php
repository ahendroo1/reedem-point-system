<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //
    public function authcheck(){
        if (!isset($_COOKIE['xf_user'])) {
            # code...
            return redirect('../../../login');
        }
        $xf_user = $_COOKIE['xf_user']; 
        $output = explode(",", $xf_user);
        $id = $output[0];


        $xf_user = DB::table('xf_user')->where('user_id', $id)->first();
        if($xf_user->is_admin > 0){
            return redirect('/admin');
        } else {
            return redirect('/');
        }
    }

}
