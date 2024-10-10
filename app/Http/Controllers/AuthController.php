<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(){
        return view ('register');
    }
    
    public function registerpost(Request $request) {
        $existinguser = User::where('email', $request->email)->first();
        if ($existinguser) {
            return back()->with('error', 'Email has been already taken!');
        }
        
        $password = $request->input('password');
        $cpassword = $request->input('confirmpassword');
        
        if ($password != $cpassword) {
            return back()->with('error', 'Password does not match!');
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($password);
            $user->role = 'user';
            $user->save();
            return back()->with('success', 'Registration successful!');
        }
    }
    
    
    public function login(){
        return view ('login');
    }
    public function loginpost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' =>$request->password,
        ];
        
        if (Auth::attempt($credentials)) {
            
            $user = Auth::user();
            
            if ($user->role == 'admin') {
                
                return redirect()->route('dashboard');
            } else {
                
                return redirect()->route('home');
            }
        }
        return back()->with('error','Check your email or password and try again!');
    }
}
