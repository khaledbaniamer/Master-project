<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Category;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function show_managers()
    {
        $managers = Manager::all();
        return view('/admin/managers' , ['managers'=>$managers]);
    }
    
    public function add_manager(Request $request)
    {
        $request->validate([
            'manager_name'=>'required',
            'manager_email'=>'required|email|unique:managers,manager_email',
            'manager_phone'=>'required|unique:managers,manager_phone|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
        $pass = $request->manager_password;
        $confirmPass = $request->confirm_manager_password;

        if($pass !== $confirmPass)
        {
            return redirect('/admin/add_managers')->with('match' , 'Confirm Password does not match');
        }

        $manager = new Manager();
        $manager->manager_name = $request->manager_name;
        $manager->manager_email = $request->manager_email;
        $manager->manager_phone = $request->manager_phone;
        $manager->manager_password = Crypt::encrypt($pass);

        $manager->save();
        return redirect('/admin/add_managers')->with('success' , 'Manager has been added Successfully');
    }

    public function single_manager($id)
    {
        $manager = Manager::find($id);

        return view('admin/update_manager' , ['manager'=>$manager]);
    }

    public function update_manager(Request $request)
    {
        $id = $request->manager_id;
        

        $request->validate([
            'manager_name'=>'required',
            'manager_email'=>'required|email|unique:managers,manager_email,'.$id,
            'manager_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
        $pass = $request->manager_password;
        $confirmPass = $request->confirm_manager_password;

        if($pass !== $confirmPass)
        {
            return redirect("/admin/update_manager/$id")->with('match' , 'Confirm Password does not match');
        }

        $update_manager = Manager::find($id);
        $update_manager->manager_name = $request->manager_name;
        $update_manager->manager_email = $request->manager_email;
        $update_manager->manager_phone = $request->manager_phone;
        $update_manager->manager_password = Crypt::encrypt($pass);

        $update_manager->update();
        return redirect("/admin/update_manager/$id")->with('success' , 'Manager has been Updated Successfully');


    }

    public function delete_manager($id)
    {
        $delete = Manager::find($id);

        $delete->delete();

        return redirect('/admin/managers')->with('delete' , 'Manager has been deleted successfully');
    }

    public function add_new_product_form()
    {
        $categories = Category::all();
        $asscos = Association::all();
        return view('association/assoc_new_product' , ['categories'=>$categories , 'asscos'=>$asscos]);
    }

    public function add_new_product(Request $request)
    {

    }

    public function manager_account($id)
    {
        $manager = Manager::find($id);
        $pass = Crypt::decrypt($manager->manager_password);
        return view('user/account_manager' , ['manager'=>$manager , 'password'=>$pass]);
    }
    public function update_manager_account(Request $request)
    {
        $id = $request->manager_id;
        

        $request->validate([
            'manager_name'=>'required',
            'manager_email'=>'required|email|unique:managers,manager_email,'.$id,
            'manager_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'confirm_manager_password'=>'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ]);
        $pass = $request->manager_password;
        $confirmPass = $request->confirm_manager_password;

        if($pass !== $confirmPass)
        {
            return redirect("/admin/update_manager/$id")->with('match' , 'Confirm Password does not match');
        }

        $update_manager = Manager::find($id);
        $update_manager->manager_name = $request->manager_name;
        $update_manager->manager_email = $request->manager_email;
        $update_manager->manager_phone = $request->manager_phone;
        $update_manager->manager_password = Crypt::encrypt($pass);

        $update_manager->update();
        return redirect("/account_manger/$id")->with('success' , 'Manager has been Updated Successfully');


    }
}
