<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponsController extends Controller
{
    public function addCoupon(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
           //echo "<pre>"; print_r($data); die;
           $coupon = new Coupon;
           $coupon->coupon_code = $data['coupon_code'];
           $coupon->amount = $data['amount'];
           $coupon->amount_type = $data['amount_type'];
           $coupon->expiry_date = $data['expiry_date'];
           if(empty($data['status'])){
                $data['status'] = 0;
           }
           $coupon->status = $data['status'];
           $coupon->save();
           return redirect()->action('CouponsController@viewCoupons')->with('message_success', 'Coupons added successfully!');

        }

        return view('admin.coupons.add_coupon');
    }

    public function viewCoupons(){
        $coupons = Coupon::get();
        return view('admin.coupons.view_coupons')->with('coupons', $coupons);
    }

    public function editCoupon(Request $request, $id = null){

        if($request->isMethod('post')){
            $data = $request->all();
            $coupon = Coupon::find($id);
            $coupon->coupon_code = $data['coupon_code'];
            $coupon->amount = $data['amount'];
            $coupon->amount_type = $data['amount_type'];
            $coupon->expiry_date = $data['expiry_date'];
            if(empty($data['status'])){
                $data['status'] = 0;
            }
            $coupon->status = $data['status'];
            $coupon->save();
            return redirect()->action('CouponsController@viewCoupons')->with('message_success', 'Coupon has been updated succesfully!');
        }

        $couponDetails = Coupon::find($id);
        return view('admin.coupons.edit_coupon')->with('couponDetails', $couponDetails);
    }

    public function deleteCoupons($id = null){
        Coupon::where(['id' => $id])->delete();
        return redirect()->back()->with('success_message', 'Coupon has been deleted successfully!');
    } 

}
