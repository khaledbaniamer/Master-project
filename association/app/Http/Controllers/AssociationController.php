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

// dd($assoc[0]);

        return view('/admin/association' , ['associations'=>$assoc]);
    }
}
