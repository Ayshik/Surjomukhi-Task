<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;


class PermissionController extends Controller
{
    public function updatepermission(Request $req) {

        $info=Permission::find(1);
        $infosa=Permission::find(2);
        $info3=Permission::find(3);
        if($info) {



            $info->Access=$req->adminaccess;
            $info->Creates=$req->admincreate;
            $info->Edit=$req->adminedit;
            $info->View=$req->adminview;
            $info->Deletes=$req->admindeletes;
           
          
            $info->save();

            
           

        }



        if($infosa) {

        $infosa->Access=$req->saaccess;
        $infosa->Creates=$req->sacreates;
        $infosa->Edit=$req->saedit;
        $infosa->View=$req->saview;
        $infosa->Deletes=$req->sadelete;

        $infosa->save();
        }

       

        if($info3) {
        
        $info3->Access=$req->uaccess;
        $info3->Creates=$req->ucreats;
        $info3->Edit=$req->uedit;
        $info3->View=$req->uview;
        $info3->Deletes=$req->udeletes;
        $info3->save();
       
    
    
      
    
    }

    return redirect()->route('permission');
 
    }

   
}
