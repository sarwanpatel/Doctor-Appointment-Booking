<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Slot;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{

      public function index(Request $request)
    {
         $doctors = Doctor::all();
         $slots = Slot::all();
         return view('frontend/pages/appointment', ['doctors' => $doctors,'slots' => $slots,]);  
    
    }

     public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','Your Registration has been successfull.');
    }


     public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){

            $route = $this->redirectDash();
            return redirect($route);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }


        public function redirectDash()
    {
       
        $redirect = '';
        if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/super/admin';
        }
        else if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/super/admin';
        }
        else{
            $redirect = '/login';
        }

        return $redirect;
    }


     public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }



}
