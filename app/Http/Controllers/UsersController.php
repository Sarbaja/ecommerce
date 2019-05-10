<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Session;
use App\Country;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    public function userloginRegister(){
        return view('users.login_register');
    }

    public function register(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            //Check if user exists or not
            $usersCount = User::where('email', $data['email'])->count();
            if($usersCount > 0){
                return redirect()->back()->with('message_error', 'Email already exists, use another one!');
            }else{
                
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

                //Send Confirmation email to user email account gmail
                $email = $data['email'];
                $messageData = ['email' => $data['email'], 'name' => $data['name'], 'code' => base64_encode($data['email'])];
                Mail::send('emails.confirmation', $messageData, function($message) use($email){
                    $message->to($email)->subject('Confirm your E-com account');
                });

                return redirect()->back()->with('message_success', 'Please Confirm your email to activate the account');
                
                if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                    Session::put('frontSession', $data['email']);
                    return redirect('/cart');
                }
            }

        }
    }

    public function confirmAccount($email){
        $email = base64_decode($email);
        $userCount = User::where('email', $email)->count();
        if($userCount > 0){
            $userDetails = User::where('email', $email)->first();
            if($userDetails->status == 1){
                return redirect('login-register')->with('message_success', 'Your Email account is already activated. Login Now!');
            }else{
                User::where('email', $email)->update(['status' =>1]);
                
                //send register email
                
                $messageData = ['email' => $email, 'name' => $userDetails->name];
                Mail::send('emails.welcome', $messageData, function($message) use($email){
                    $message->to($email)->subject('Welcome to E-com Website');
                });

                return redirect('login-register')->with('message_success', 'Your Email account is now activated. Login Now!');
            }
        }
        else{
            abort(404);
        }
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            //echo "<pre>"; print_r($data); die;
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                $userStatus = User::where('email', $data['email'])->first();
                if($userStatus->status == 0){
                    return redirect()->back()->with('message_error', 'Your account has not been activated. Please check your email and activate it!');
                }
                Session::put('frontSession', $data['email']);
                if(!empty(Session::get('session_id'))){
                    $session_id = Session::get('session_id');
                    DB::table('cart')->where('session_id',$session_id)->update(['user_email' => $data['email']]);
                }
                return redirect('/cart');
            }
            else{
                return redirect()->back()->with('message_error', 'Invalid Username or Password');
            }
        }
    }

    /*public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $userStatus = User::where('email',$data['email'])->first();
                if($userStatus->status == 0){
                    return redirect()->back()->with('message_error','Your account is not activated! Please confirm your email to activate.');    
                }
                Session::put('frontSession',$data['email']);

                if(!empty(Session::get('session_id'))){
                    $session_id = Session::get('session_id');
                    DB::table('cart')->where('session_id',$session_id)->update(['user_email' => $data['email']]);
                }

                return redirect('/cart');
            }else{
                return redirect()->back()->with('flash_message_error','Invalid Username or Password!');
            }
        }
    }*/

    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        Session::forget('session_id');
        Session::forget('CouponAmount');
        Session::forget('CouponCode');
        return redirect('/');
    }

    public function myAccount(Request $request){
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $country = Country::get();

        if($request->isMethod('post')){
            $data = $request->all();
            $user =User::find($user_id);
            
            $user->name = $data['name'];
            $user->address = $data['address'];
            $user->city = $data['city'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->pincode = $data['pincode'];
            $user->mobile = $data['mobile'];
            $user->save();
            return redirect()->back()->with('message_success', 'Account details updated successfully');
        }

        return view('frontend.account')->with('country', $country)->with('userDetails', $userDetails);
    }


    public function updatePassword(Request $request){

        if($request->isMethod('post')){
            $data= $request->all();
            //echo "<pre>"; print_r($data); die;
            $old_pwd = User::where('id', Auth::User()->id)->first();
            $current_pwd = $data['current_pwd'];
            if(Hash::check($current_pwd, $old_pwd->password)){
                //Update password
                $new_pwd = bcrypt($data['new_pwd']);
                User::where('id', Auth::User()->id)->update(['password' => $new_pwd]);
                return redirect()->back()->with('message_success', 'Password updated succesfully!');

            }else{
                return redirect()->back()->with('message_error', 'Current Password is incorrect');
            }
        }

        return view('frontend.updatepassword');
    }

    public function chkUserPassword(Request $request){
        $data = $request->all();
        //echo "<pre>"; print_r($data); die;
        $current_password = $data['current_pwd'];
        $user_id = Auth::User()->id;
        $check_password = User::where('id', $user_id)->first();
        if(Hash::check($current_password, $check_password->password)){
            echo 'true'; die;
        }
        else{
            echo 'false'; die;
        }
    }

    //remote checking if email exists or not
    public function checkEmail(Request $request){

         //Check if user exists or not
         $data = $request->all();
         $usersCount = User::where('email', $data['email'])->count();
         if($usersCount > 0){
             echo "false";
         }else{
             echo "true"; die;
         }
    }

    public function viewUsers(){
        $users = User::get();
        return view('admin.users.view_users')->with('users', $users);
    }

    public function forgotPassword(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            $userCount = User::where('email', $data['email'])->count();
            if($userCount == 0){
                return redirect()->back()->with('message_error', 'Email does not exists');
            }

            //get userdetails 
            $userDetails = User::where('email', $data['email'])->first();

            //generate random password
            $random_password = str_random(8);

            //encode secure password
            $new_password = bcrypt($random_password);

            //update password
            User::where('email', $data['email'])->update(['password' => $new_password]);

            //send forgot password email 
            $email = $data['email'];
            $name = $userDetails->name;
            $messageData = [
                'email' => $email,
                'name' => $name,
                'password' => $random_password
            ];
            Mail::send('emails.forgotpassword', $messageData, function($message) use ($email){
                $message->to($email)->subject('New Password');
            });

            return redirect('login-register')->with('message_success', 'Please check your email for new password!');
        }
        return view('users.forgot_password');
    }
}
