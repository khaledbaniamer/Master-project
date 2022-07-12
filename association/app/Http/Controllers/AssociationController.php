<?php

namespace App\Http\Controllers;

use App\Mail\registerAssoc;
use App\Models\Association;
use App\Models\Category;
use App\Models\Manager;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

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

    //End Admin side 

    /////////////////////////////////////////////

    // User side 

    public function user_association()
    {
        $assoc = Association::select('associations.*', 'managers.manager_name')
        ->join('managers', 'managers.id', '=', 'associations.assoc_manager_id')->get();
        return view('/association/associations' , ['assocs'=>$assoc]);
    }

    public function assoc_profile($id)
    {   
        
        $assoc = Association::select('associations.*', 'managers.manager_name')
        ->join('managers', 'managers.id', '=', 'associations.assoc_manager_id')->where('associations.id',$id)->first();

        $products = Product::where('assoc_id' , $id);

        return view('association/profile' , ['assoc'=>$assoc , 'products'=>$products]);
    }

    public function show_edit_assoc($id)
    {
        
        $assoc = Association::select('associations.*', 'managers.manager_name')
        ->join('managers', 'managers.id', '=', 'associations.assoc_manager_id')->where('associations.id',$id)->first();
        // return view('/association/associations' , ['assocs'=>$assoc]);
        return view('association/edit_assoc' , ['assoc'=>$assoc]);
    }

    public function edit_assoc(Request $request)
    {
        $id = $request->assoc_id;
        $request->validate([
            'assoc_name'=>'required',
            'assoc_address'=>'required',
            'assoc_email'=>'required|email|unique:associations,assoc_email,'.$id,
            'assoc_date'=>'required',
            // 'assoc_image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'assoc_date'=>'required',
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

        $assoc->assoc_description = $request->assoc_description;
        $assoc->assoc_phone = $request->assoc_phone;
        $assoc->assoc_image = $request->file('assoc_image')->store('storage/association_images');

        $assoc->save();

        return redirect("/edit_assoc/$id")->with('success' , 'Assocaiation has been updated successflly');

    }

    public function assoc_products($id)
    {
        $products = Product::where('assoc_id',$id)->get();
        $assoc_id = $id;
        return view('association/assoc_products' , ['products'=>$products , 'assoc'=>$assoc_id]);
    }

    public function add_new_product_form($id)
    {
        $categories = Category::all();
        $asscos = Association::find($id);
        return view('association/assoc_new_product' , ['categories'=>$categories , 'asscos'=>$asscos]);
    }

    public function add_new_product(Request $request)
    {
        // dd($request);
        $request->validate([
            'prod_name'=>'required',
            'prod_description'=>'required',
            'prod_price'=>'required',
            'prod_category'=>'required',
            'prod_assoc'=>'required',
            // 'prod_image'=>'required',
        ]);


        $validatedData = $request->validate([
            'prod_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $request->file('prod_image')->store('public/product_images');

        $product = new Product();
        $product->prod_name = $request->prod_name;
        $product->prod_description = $request->prod_description;
        $product->prod_price = $request->prod_price;
        $product->category_id = $request->prod_category;
        $product->assoc_id = $request->prod_assoc;
        $product->prod_image = $request->file('prod_image')->store('storage/product_images');

        $product->save();

        return redirect("asscoc_addNewProduct/$request->prod_assoc")->with('success' , 'Product has been added successflly');
    }

    public function update_product_form($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('/association/update_product', ['product'=>$product , 'categories'=>$categories]);
    }

    public function update_product(Request $request)
    {
        $id = $request->product_id;
        $request->validate([
            'prod_name'=>'required',
            'prod_description'=>'required',
            'prod_price'=>'required',
            'prod_category'=>'required',
            
            
        ]);


        $validatedData = $request->validate([
            'prod_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $request->file('prod_image')->store('public/product_images');

        $product = Product::find($id);
        $product->prod_name = $request->prod_name;
        $product->prod_description = $request->prod_description;
        $product->prod_price = $request->prod_price;
        $product->category_id = $request->prod_category;
        $product->assoc_id = $request->prod_assoc;
        $product->prod_image = $request->file('prod_image')->store('storage/product_images');

        $product->save();

        return redirect("/update_product/$id")->with('success' , 'Product has been updated successflly');
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("assoc_products/$id")->with('delete' , 'Category has been deleted successfully');
    }

    public function show_assoc_register()
    {
        return view('association.assoc_register');
    }

    public function assoc_register(Request $request)
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



        if($this->sendEmail($request->manager_email ,$request->manager_name )){

            $manager = new Manager();
            $manager->manager_name = $request->manager_name;
            $manager->manager_email = $request->manager_email;
            $manager->manager_phone = $request->manager_phone;
            $manager->manager_password = Crypt::encrypt($pass);
    
            $manager->save();

            $assoc = new Association();
            $assoc->assoc_name = '';
            $assoc->assoc_image = '';
            $assoc->assoc_location = '';
            $assoc->assoc_phone = '';
            $assoc->assoc_description = '';
            $assoc->assoc_email = '';
            $assoc->assoc_date = '';
            $assoc->assoc_manager_id  = Manager::all()->last()->id;
            
            $assoc->save();

            return redirect('/assoc_register')->with('success' , 'Email has been sent please check your inbox');
        }else{
            return redirect('/assoc_register')->with('fail' , 'Network issue please contact with websit admin');
        }

    }

    public function sendEmail($email , $name)
    {
        $id = Association::all()->last()->id;
        $id=$id+1;
        $link = asset('/add_assoc_email?email=' . $email);
        $data = ['link'=>$link , 'name'=>$name , 'id'=>$id];
        try{
            
            Mail::to($email)->send(new registerAssoc($data));
            return true;
        }catch(Exception $e){
            return false;
        }
 
    }
    
    public function assoc_email(Request $request)
    {
        
        $manager_email = $request->email;
        $manager = Manager::where('manager_email',$manager_email)->first();
        
        return view('association/assoc_email',['manager'=>$manager]);
    }
    public function assoc_register_email(Request $request)
    {
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
        $manger_id = $request->manager_id;
        $assoc = Association::where('assoc_manager_id',$manger_id)->first();
        $assoc->assoc_name = $request->assoc_name;
        $assoc->assoc_location = $request->assoc_address;
        $assoc->assoc_email = $request->assoc_email;
        $assoc->assoc_date = $request->assoc_date;
        // $assoc->assoc_manager_id = $request->assoc_managers;
        $assoc->assoc_description = $request->assoc_description;
        $assoc->assoc_phone = $request->assoc_phone;
        $assoc->assoc_image = $request->file('assoc_image')->store('storage/association_images');

        $assoc->save();

        return redirect('/add_assoc_email')->with('success' , 'Assocaiation has been added successflly');
   
    }
}
