<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrophyController extends Controller
{
    //
    public function cookiecheck()
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

    public function createtier(Request $request){
        if($request->hasFile('trophy_icon')){
            $request->file('trophy_icon')->move('images/upload', $request->file('trophy_icon')->getClientOriginalName() );
            
            DB::table('xf_coupon_tier')->insert( 
                ['trophy_tier' => $request->trophy_tier,  'trophy_icon' => $request->file('trophy_icon')->getClientOriginalName(), 'point_finish' => $request->point_finish, 'point_start' => $request->point_start, ]
            );
        }

        // return $request->all();
        return redirect('/admin-trophy')->with('success', 'Data berhasil di Tambahkan');
    }

    public function deletetier($id){
        
        $this->cookiecheck();

        $delete = DB::table('xf_coupon_tier')->where('coupon_tier_id', $id)->delete(); 
        return redirect('admin-trophy');
    }

    public function updatetier(Request $request, $id){
        if($request->hasFile('trophy_icon')){
            $request->file('trophy_icon')->move('images/upload', $request->file('trophy_icon')->getClientOriginalName() );
            
            DB::table('xf_coupon_tier')
            ->where('coupon_tier_id', $id)
            ->update([
                'trophy_tier' => $request->trophy_tier ,
                'trophy_icon' => $request->file('trophy_icon')->getClientOriginalName() ,
                'point_start' => $request->point_start ,
                'point_finish' => $request->point_finish
            ]);
        } else {
            DB::table('xf_coupon_tier')
            ->where('coupon_tier_id', $id)
            ->update([ 
                'trophy_tier' => $request->trophy_tier ,
                'point_start' => $request->point_start ,
                'point_finish' => $request->point_finish
            ]);
        }

        return redirect('admin-trophy');
    }

}
