<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function insertsignup(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->address = $request->address;
        $users->dob = $request->dob;
        $users->gender = $request->gender;
        $users->email = $request->email;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role = '2' ;

        $users->is_deleted = '0';



        $users->save();
        return redirect('login');


    }

    public function adminlogin(Request $request)
    {




        $email=$request->email;
        $password=$request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password,]))
        {
            if(auth()->user()->role == '1')
            {

             return redirect('admindashboard');
            }

            elseif (auth()->user()->role == '2' && auth()->user()->is_deleted == '0')
            {
                return redirect('user-dashboard');

            }
            else
            {
                return redirect('login')->with('message',"your account has been deleted and temporarily blocked contect to admin");

            }
        }
        else
        {
             return redirect('login')->with('message',"username and password in incorrect");
        }


    }


    public function create_account()
    {


    }


}
