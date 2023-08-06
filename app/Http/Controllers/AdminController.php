<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function admindashboard()
    {
        // return view('admin.admin-dashboard');

        $totalusers = User::where('role','2')->count();
        return view('admin.admin-dashboard', compact('totalusers'));

    }


    public function register()
    {
        return view('admin.register');
    }




    public function insert(Request $request)
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

        if($request->hasFile('image'))
        {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/userimage/', $filename);
            $users->image = $filename;

            // print_r($student);
        }

        $users->save();
        return redirect('userlist');


    }

    public function userlist()
    {
        $lists = User::where('role','2')->where('is_deleted','0')->get();
        // $lists = User::all();
        return view('admin.userlist',compact('lists'));


    }

    public function deletelist()
    {
        $lists = User::where('role','2')->where('is_deleted','1')->get();
        // $lists = User::all();
        return view('admin.deletelist',compact('lists'));


    }




    public function edit(Request $request , $id)
    {

        $find = User::find($id);

        // dd($find);

        return view('admin.edit',compact('find'));


    }

    public function update(Request $request)
    {
        // dd($request->all());
       $user_id = $request->edit_id;

    //    dd($user_id);

       $updating = User::find($user_id);

    //    dd($updating->name);

    $filename = '';
    if($request->hasFile('image'))
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/userimage/', $filename);
    }
    else
    {
        $filename = $updating->image;
    }

       $updating->name = $request->name;
       $updating->address = $request->address;
       $updating->dob = $request->dob;
       $updating->gender = $request->gender;
       $updating->email = $request->email;
       $updating->password = Hash::make($request->password);
       $updating->image = $filename;


       $updating->save();

    //    return redirect('userlist');
       return redirect('userlist')->with('message',"This is data is updated successfully");


    }

    public function delete( Request $request ,$id)
    {
        $user_details = User::where(['id' => $id])->update(['is_deleted'=>'1']);
        return redirect('userlist')->with('message',"user deleted  successfully");
    }

    public function recover( Request $request ,$id)
    {
        $user_details = User::where(['id' => $id])->update(['is_deleted'=>'0']);
        return redirect('userlist')->with('message',"user recovered");
    }

    public function adminchangePassword()
    {
        return view('admin.change-password');
    }




    public function adminupdatePassword(Request $request)
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


        public function changeStatus(Request $request)
        {
            $user = User::find($request->user_id);
            $user->status = $request->status;
            $user->save();

            return response()->json(['success'=>'Status change successfully.']);

        }









    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }
}
