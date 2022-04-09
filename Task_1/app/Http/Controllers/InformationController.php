<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Admins;

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
        
         return view('pages.Permission');
       
    }
}
