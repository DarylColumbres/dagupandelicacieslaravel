<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD


class AdminController extends Controller
{
    
=======
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
    public function admin(){
        session()->forget('cart');
        return view ('adminlogin');
    }
<<<<<<< HEAD
    public function adminpost(Request $request)
    {
        
        $email = $request->input('email');
        $password = $request->input('password');
        
        
        if ($email === 'admin@example.com' && $password === 'your_secure_password') {
            
            Auth::loginUsingId(User::where('email', 'admin@example.com')->first()->id);
            
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Invalid email or password. Please check your credentials and try again.');
        }
    }
=======

    public function adminpost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if($email === 'admin' && $password === 'admin'){
            return redirect('/dashboard');
        }
        else {
            return back()->with('error', 'Invalid email or password. Please check your credentials and try again.');
        }
        return back()->with('error','Error with logging in, Please check your email or password and try again');
    }




   
>>>>>>> e28d8d047f8a90b1879ea904ca889f5a8e87ed55
}
