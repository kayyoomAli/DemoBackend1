<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function userDashboard()
    {
        return view('user.user-dashboard');
    }
    public function userprofile()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('user.user-profile', compact('user'));
    }



    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->save();

        // $user = User::where('id', Auth::user()->id)->update([
        //     'name'=>$request->name,
        //     'address'=>$request->address,
        //     'dob'=>$request->dob,
        //     'gender'=>$request->gender,
        // ]);

        return redirect('user-profile');
    }

    public function delete(Request $request, $id)
    {
        $deteting = User::find($id);

        $deteting->delete();
        return redirect('admin.userlist');
    }

    public function userchangePassword()
    {
        return view('user.user-change-password');
    }


    public function userupdatePassword(Request $request)
    {


        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        // dd($currentPasswordStatus);

        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message','Password Updated Successfully');

        }else{

            return redirect()->back()->with('message','Current Password does not match with Old Password');
        }
    }



}
