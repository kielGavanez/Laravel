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

    public function registration(){

        return view('registration');

    }

    public function register(Request $request){

        $validate = $request->validate([

            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:5|max:20',
            'password' => 'required|min:5|'//max:20|'            
        ]);

        //encrypt password

        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);

        if($user){
            return view('/login');
        }

    }

    
}
