<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

      
        return view('Pages.Home');  
        

    }

    public function user_signup(){

      
        return view('Pages.Signup_user');  
        

    }

    public function admin_signup(){

      
        return view('Pages.Signup_admin');  
        

    }

    public function superadmin_signup(){

      
        return view('Pages.Signup_super_admin');  
        

    }

    public function login(){

      
        return view('Pages.Login');  
        

    }

    public function dashboard(){

      
        return view('Pages.Dashboard');  
        

    }

 

    
    public function table(){

      
        return view('Pages.Table');  
        

    }

}
