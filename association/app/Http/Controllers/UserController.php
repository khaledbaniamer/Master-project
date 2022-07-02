<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('/admin/users' , ['users'=>$users]);
    }

    public function add_user(Request $request)
    {
        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required|email|unique:users,user_email',
            'user_phone'=>'required|unique:users,user_phone|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'user_address'=>'required',
            'user_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_user_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        $pass = $request->user_password;
        $confirm_pass = $request->confirm_user_password;

        if($pass !== $confirm_pass)
        {
            return redirect("/admin/add_user")->with('match' , 'Confirm Password does not match');
        }
        $user = new User();
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_location = $request->user_address;
        $user->user_phone = $request->user_phone;
        $user->user_password = Crypt::encrypt($pass);

        $user->save();
        return redirect('/admin/add_user')->with('success' , 'User has been added successfully');
    }

    public function single_user($id)
    {
        $user = User::find($id);
        $password = Crypt::decrypt($user->user_password);
        return view('/admin/update_user',['user'=>$user , 'pass'=>$password]);
    }

    public function update_user(Request $request)
    {
        $id = $request->user_id;

        $request->validate([
            'user_name'=>'required',
            'user_email'=>'required|email|unique:users,user_email,'.$id,
            'user_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|unique:users,user_phone,'.$id,
            'user_address'=>'required',
            'user_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_user_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        $pass = $request->user_password;
        $confirm_pass = $request->confirm_user_password;

        if($pass !== $confirm_pass)
        {
            return redirect("/admin/update_user/$id")->with('match' , 'Confirm Password does not match');
        }
        $user = User::find($id);
        $user->user_name = $request->user_name;
        $user->user_email = $request->user_email;
        $user->user_location = $request->user_address;
        $user->user_phone = $request->user_phone;
        $user->user_password = Crypt::encrypt($pass);

        $user->save();
        return redirect("/admin/update_user/$id")->with('success' , 'User has been Updated successfully');

    }

    public function delete_user($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect('admin/users')->with('delete' , 'User has been deleted successfully');
    }
}
