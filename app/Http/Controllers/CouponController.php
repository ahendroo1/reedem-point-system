<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
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
            return redirect('/admin-trophy');
        } 

        return view($page, $data);
        
    }
    //

    public function editcoupon($id){
        
        $coupon_edit = DB::table('xf_coupon')
        ->join('xf_coupon_category', 'xf_coupon_category.coupon_category_id', '=', 'xf_coupon.coupon_category_id')
        ->join('xf_coupon_tier', 'xf_coupon_tier.coupon_tier_id', '=', 'xf_coupon.coupon_tier_id')
        ->select('xf_coupon.*', 'xf_coupon_category.*', 'xf_coupon_tier.*')
        ->where('coupon_id', $id)->first();
        
        $coupon_category = DB::table('xf_coupon_category')->orderBy('coupon_category_id', 'desc')->get();
        $tier = DB::table('xf_coupon_tier')->orderBy('coupon_tier_id', 'desc')->get();
        
        return $this->cookiecheck('edit_coupon', ['coupon' => $coupon_edit, 'coupon_category' => $coupon_category, 'tier' => $tier]);
    }

    public function updatecoupon(Request $request, $id){
        // dd($request->all()); 
        if($request->hasFile('coupon_banner')){
            $request->file('coupon_banner')->move('images/upload', $request->file('coupon_banner')->getClientOriginalName() );
            
            DB::table('xf_coupon')
            ->where('coupon_id', $id)
            ->update([
                'coupon_tier_id' => $request->coupon_tier_id ,
                'coupon_category_id' => $request->coupon_category_id ,
                'coupon_name' => $request->coupon_name ,
                'coupon_expired' => $request->coupon_expired ,
                'coupon_description' => $request->coupon_description ,
                'coupon_banner' => $request->file('coupon_banner')->getClientOriginalName() ,
            ]);
        } else {
            DB::table('xf_coupon')
            ->where('coupon_id', $id)
            ->update([ 
                'coupon_tier_id' => $request->coupon_tier_id ,
                'coupon_category_id' => $request->coupon_category_id ,
                'coupon_name' => $request->coupon_name ,
                'coupon_expired' => $request->coupon_expired ,
                'coupon_description' => $request->coupon_description ,
            ]);
        }

        return redirect('edit-coupon/'.$id)->with('success', 'Update success');
    }

    
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

    public function updatecategory(Request $request, $id){

        if($request->hasFile('category_icon')){
            $request->file('category_icon')->move('images/upload', $request->file('category_icon')->getClientOriginalName() );
            
            DB::table('xf_coupon_category')
            ->where('coupon_category_id', $id)
            ->update([
                'coupon_category_name' => $request->coupon_category_name ,
                'category_icon' => $request->file('category_icon')->getClientOriginalName() ,
            ]);
        } else {
            DB::table('xf_coupon_category')
            ->where('coupon_category_id', $id)
            ->update([ 
                'coupon_category_name' => $request->coupon_category_name ,
            ]);
        }

        return redirect('admin-coupon');
    }

    public function deletecategory($id){
        
        $delete = DB::table('xf_coupon_category')->where('coupon_category_id', $id)->delete(); 
        return redirect('admin-coupon');
    }


    public function deletecoupon($id){
        
        $delete = DB::table('xf_coupon')->where('coupon_id', $id)->delete(); 
        return redirect('admin-coupon');
    }
    
    public function createcoupon(Request $request){
        
        if($request->hasFile('coupon_banner')){
            $request->file('coupon_banner')->move('images/upload', $request->file('coupon_banner')->getClientOriginalName() );
            
            DB::table('xf_coupon')->insert(
                [
                    'coupon_category_id' => $request->coupon_category_id,
                    'coupon_tier_id' => $request->coupon_tier_id,
                    'coupon_name' => $request->coupon_name,
                    'coupon_banner' => $request->file('coupon_banner')->getClientOriginalName(), 
                    'coupon_description' => $request->coupon_description,
                    'coupon_expired' => $request->coupon_expired,
                    'status' => 1,
                ]
            );
        }

        return redirect('admin-coupon');

    }

    // FRONT PAGES


    public function getcouponbycategoryid($id){
        $data = DB::table('xf_coupon')->where('coupon_category_id', $id)->get();

        return $data ;
    }

    public function getcouponid($id){
        
        $data = DB::table('xf_coupon')->where('coupon_id', $id)->get();
        return $data ;
    }

}
