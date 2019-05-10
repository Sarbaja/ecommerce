<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Order;

class AdminController extends Controller
{
    /*public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'IsAdmin' => '1'])){
               return redirect('admin/dashboard');
            }
            else{
                return redirect('/admin')->with('error_message', 'Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }*/

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $adminCount = Admin::where(['username' => $data['username'], 'password' => md5($data['password']), 'status' => 1])->count(); 
            if($adminCount > 0){
                Session::put('adminSession', $data['username']);
                return redirect('/admin/dashboard');
            }
            
            else{
                return redirect('/admin')->with('error_message', 'Invalid Username or Password');
            }
        }
        return view('admin.admin_login');
    }

    public function dashboard(){
        $adminDetails = Admin::where(['username' => Session::get('adminSession')])->first();
        $orders = Order::with('orders')->orderBy('id', 'desc')->get();
        $orders = json_decode(json_encode($orders));
        $users = User::get();
        return view('admin.dashboard')->with('adminDetails', $adminDetails)->with('orders', $orders)->with('users', $users);
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('success_message', 'Logged out Successfully');
    }

    public function settings(){

        $adminDetails = Admin::where(['username' => Session::get('adminSession')])->first();
        //echo "<pre>"; print_r($adminDetails); die;
        return view('admin.settings')->with('adminDetails', $adminDetails);
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $adminCount = Admin::where(['username' => Session::get('adminSession'), 'password' => md5($data['current_pwd'])])->count(); 
        if($adminCount == 1){
            echo "true"; die;
        }
        else{
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $adminCount = Admin::where(['username' => Session::get('adminSession'), 'password' => md5($data['current_pwd'])])->count(); 

            if($adminCount == 1)
            {
                $password = md5($data['new_pwd']);
                Admin::where('username', Session::get('adminSession'))->update(['password' => $password]);
                return redirect('/admin/settings')->with('message_success', 'Password updated succesfully');
            }
            else
            {
                return redirect('/admin/settings')->with('message_error', 'Incorrect current password');
            }
        }
    }
    
}

