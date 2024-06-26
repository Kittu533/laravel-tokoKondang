<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }   
    
    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password'=>$request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success','login berhasil');
        }
        return back()->with('error','Username or Password Salah');
    }


    public function register(){
        return view('register');
    }
    public function registerPost(Request $request){
        $user = new User();

        $user-> name = $request->name;
        $user -> email = $request-> email;
        $user -> password =Hash::make( $request ->password);

        $user -> save();

        return back()->with('success','Register Successfuly');

    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}   