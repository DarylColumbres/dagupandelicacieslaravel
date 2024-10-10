<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    
    public function admin()
    {
        session()->forget('cart');
        return view('adminlogin');
    }
    
    
    public function adminpost(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        
        
        if ($email === 'admin@example.com' && $password === 'your_secure_password') {
            
            $adminUser = User::where('email', 'admin@example.com')->first();
            if ($adminUser) {
                Auth::loginUsingId($adminUser->id);
                return redirect('/dashboard');
            }
        }
        
        
        elseif ($email === 'admin' && $password === 'admin') {
            return redirect('/dashboard');
        }
        
        
        return back()->with('error', 'Invalid email or password. Please check your credentials and try again.');
    }
}
