<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'passwordin' => 'required',
        ],[
            'username.required' => 'Username wajib diisi',
            'passwordin.required' => 'Password wajib diisi',
        ]);

        $info = [
            'username' => $request->username,
            'password' => $request->passwordin
        ];
        if(Auth::attempt($info)){
            $user = Auth::user(); // Mendapatkan instance user yang sedang login
            
            if($user->level == 1){
                return redirect('/admin');
            } else if ($user->level == 2) {
                return redirect('/user');
            }
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
