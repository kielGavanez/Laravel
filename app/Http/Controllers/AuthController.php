<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function Index(){

        return view('login');

    }

    public function login(Request $request){
        $credentials = $request->only([

            'username', 'password'
        ]);

        if (Auth::attempt($credentials)){
            return redirect('/');

        }else{
            return redirect()
                ->back()
                ->withErrors(['message' => 'Invalid username or password!']);
            
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    
}
