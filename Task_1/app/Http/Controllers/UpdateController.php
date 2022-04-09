<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use App\Models\Superadmins;
use App\Models\Users;
use App\Models\Logins;

class UpdateController extends Controller
{
    public function updateadmin(Request $req) {

        $info=Admins::find($req->sl);

        if($info) {



            $info->Fullname=$req->name;
            $info->Phoneno=$req->mobile;
            $info->Address=$req->address;
          
            $info->save();

            
            return redirect()->route('admininfo');

        }


    }


    public function admin_delete(Request $request,$id)
    {       
        $model=Admins::find($id);
        $model->delete(); 
        $request->session()->flash('message','Admin Deleted');
        return redirect()->route('admininfo');
    }
}
