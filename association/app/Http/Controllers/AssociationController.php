<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Manager;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    public function association()
    {
        $assoc = Association::select('associations.*', 'managers.manager_name')
        ->join('managers', 'managers.id', '=', 'associations.assoc_manager_id')->get();

        return view('/admin/association' , ['associations'=>$assoc]);
    }

    public function show_add_assoc()
    {
        $managers = Manager::all();
        return view('/admin/add_assoc' , ['managers'=>$managers]);
    }

    public function add_assoc(Request $request)
    {
        // dd($request->assoc_image);
        $request->validate([
            'assoc_name'=>'required',
            'assoc_address'=>'required',
            'assoc_email'=>'required|email|unique:associations,assoc_email',
            'assoc_date'=>'required',
            // 'assoc_image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'assoc_managers'=>'required',
            // 'assoc_description'=>'required',
            'assoc_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
        ]);

        $validatedData = $request->validate([
            'assoc_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $request->file('assoc_image')->store('public/association_images');

        $assoc = new Association();
        $assoc->assoc_name = $request->assoc_name;
        $assoc->assoc_location = $request->assoc_address;
        $assoc->assoc_email = $request->assoc_email;
        $assoc->assoc_date = $request->assoc_date;
        $assoc->assoc_manager_id = $request->assoc_managers;
        $assoc->assoc_description = $request->assoc_description;
        $assoc->assoc_phone = $request->assoc_phone;
        $assoc->assoc_image = $request->file('assoc_image')->store('storage/association_images');

        $assoc->save();

        return redirect('/admin/add_assoc')->with('success' , 'Assocaiation has been added successflly');
    }

    public function single_assoc($id)
    {
        $managers = Manager::all();
        
        $assoc = Association::find($id);
        return view('admin/update_assoc' , ['assoc'=>$assoc , 'managers'=>$managers]);
    }

    public function update_assoc(Request $request)
    {
        $id = $request->assoc_id;
        $request->validate([
            'assoc_name'=>'required',
            'assoc_address'=>'required',
            'assoc_email'=>'required|email|unique:associations,assoc_email,'.$id,
            'assoc_date'=>'required',
            // 'assoc_image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'assoc_managers'=>'required',
            // 'assoc_description'=>'required',
            'assoc_phone'=>'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
        ]);

        $validatedData = $request->validate([
            'assoc_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $request->file('assoc_image')->store('public/association_images');

        $assoc = Association::find($id);
        $assoc->assoc_name = $request->assoc_name;
        $assoc->assoc_location = $request->assoc_address;
        $assoc->assoc_email = $request->assoc_email;
        $assoc->assoc_date = $request->assoc_date;
        $assoc->assoc_manager_id = $request->assoc_managers;
        $assoc->assoc_description = $request->assoc_description;
        $assoc->assoc_phone = $request->assoc_phone;
        $assoc->assoc_image = $request->file('assoc_image')->store('storage/association_images');

        $assoc->save();

        if($assoc){

            return redirect("/admin/update_assoc/$id")->with('success' , 'Assocaiation has been added successflly');
        }else{
            
            return redirect("/admin/update_assoc/$id")->with('fail' , 'Assocaiation does not updated');
        }

    }

    public function delete_assoc($id)
    {
        $delete = Association::find($id);
        if($delete->delete()){

            return redirect('/admin/association')->with('delete' , 'Category has been deleted successfully');
        }
    }
}
