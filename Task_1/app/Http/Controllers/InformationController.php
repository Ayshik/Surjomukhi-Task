<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Admins;
use App\Models\Permission;

class InformationController extends Controller
{
    public function Admininfo()
    {    
         $result['data']=Admins::all();
         return view('pages.Admininfo',$result);
       
    }

    public function Userinfo()
    {    
         $result['data']=Users::all();
         return view('pages.Userinfo',$result);
       
    }

    public function permission()
    {    
        
     $result['admin']=Permission::where ('Role','Admin')->first();
     $result['user']=Permission::where ('Role','User')->first();
     $result['superadmin']=Permission::where ('Role','SuperAdmin')->first();
    // dd($data);
    return view('pages.Permission')->with($result);  
       
    }
}
