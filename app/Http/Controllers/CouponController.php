<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
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
    public function createcategory(Request $request){
        // dd($request->all());
        

        // $request->request->add(['user_id' =>  $user->id]);
        // $siswa  = \App\Siswa::create($request->all());
        if($request->hasFile('category_icon')){
            $request->file('category_icon')->move('images/upload', $request->file('category_icon')->getClientOriginalName() );
            
            DB::table('xf_coupon_category')->insert(
                ['coupon_category_name' => $request->coupon_category_name, 'category_icon' => $request->file('category_icon')->getClientOriginalName()]
            );
            
        }

        // return $request->all();
        return redirect('/admin-coupon')->with('success', 'Data berhasil di Tambahkan');
    }


    public function deletecategory($id){
        
        $delete = DB::table('xf_coupon_category')->where('coupon_category_id', $id)->delete(); 
        return redirect('admin-coupon');
    }
}
