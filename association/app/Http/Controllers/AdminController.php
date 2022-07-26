<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Association;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function admin_login(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $admin = Admin::where('admin_email' , $email)->first();
        $manager = Manager::where('manager_email' , $email)->first();
        // dd($manager);
        if($admin){
            if($password == Crypt::decrypt($admin->admin_password)){
                $request->session()->put('admin_id', $admin->id);
                $request->session()->put('admin_name', $admin->admin_name);
                return redirect('/admin');
            }else{
                return redirect('/admin_login')->with('pass' , 'Wrong Password');
            }
        }elseif($manager){
            if($password == Crypt::decrypt($manager->manager_password)){
                // dd($manager);
                    
                $assoc = Association::where('assoc_manager_id',$manager->id)->first();
                if($assoc == null){

                    return redirect('/admin_login')->with('noAssoc' , 'This account does not have association , Please complete register process');
                }

                $request->session()->put('manager_id', $manager->id);
                $request->session()->put('manager_name', $manager->manager_name);

                return redirect("/assoc_profile/$assoc->id");
            }else{
                return redirect('/admin_login')->with('pass' , 'Wrong Password');
            }
        }else{
            return redirect('/admin_login')->with('email', "Email does not exist");
        }
    }

    public function show_admins()
    {
        $admins = Admin::all();
        return view('admin/admin' , ['admins'=>$admins]);
    }

    public function add_admin(Request $request)
    {
        $request->validate([
            'admin_name'=>'required',
            'admin_email'=>'required|email|unique:admins,admin_email',
            'admin_phone'=>'required|unique:admins,admin_phone|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'admin_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_admin_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
        $pass = $request->admin_password;
        $confirmPass = $request->confirm_admin_password;

        if($pass !== $confirmPass)
        {
            return redirect('/admin/add_admin')->with('match' , 'Confirm Password does not match');
        }

        $admin = new Admin();
        $admin->admin_name = $request->admin_name;
        $admin->admin_email = $request->admin_email;
        $admin->admin_phone = $request->admin_phone;
        $admin->admin_password = Crypt::encrypt($pass);

        $admin->save();
        return redirect('/admin/add_admin')->with('success' , 'Admin has been added Successfully');
    }

    public function show_update_admin($id)
    {
        $admin = Admin::find($id);
        $password = Crypt::decrypt($admin->	admin_password);
        return view('admin/update_admin' , ['admin'=>$admin , 'password'=>$password]);
    }
    public function update_admin(Request $request)
    {
        $id = $request->admin_id;
        

        $request->validate([
            'admin_name'=>'required',
            'admin_email'=>'required|email|unique:admins,admin_email,'.$id,
            'admin_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'admin_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_admin_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
        $pass = $request->admin_password;
        $confirmPass = $request->confirm_admin_password;

        if($pass !== $confirmPass)
        {
            return redirect("/admin/update_admin/$id")->with('match' , 'Confirm Password does not match');
        }

        $update_admin = Admin::find($id);
        $update_admin->admin_name = $request->admin_name;
        $update_admin->admin_email = $request->admin_email;
        $update_admin->admin_phone = $request->admin_phone;
        $update_admin->admin_password = Crypt::encrypt($pass);

        $update_admin->update();
        return redirect("/admin/update_admin/$id")->with('success' , 'Admin has been Updated Successfully');

    }

    public function getAssocId()
    {
        $id = session()->get('manager_id');
        $assoc_id = Association::where('assoc_manager_id' , $id)->first();

        return view('pages/manager_restrict',['assoc_id'=>$assoc_id]);
    }

    public function admin_logout()
    {
        if (session()->has('admin_id')){
            session()->pull('admin_id');
            session()->pull('admin_name');

        }
        return redirect('/admin_login');
    }

}
