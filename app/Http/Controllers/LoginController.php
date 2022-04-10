<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logins;

class LoginController extends Controller
{
    public function submitlogin(Request $req){
      
        $this->validate(
            $req,
            [
                
                
                'uname'=>'required|min:5',
                'password'=>'required|max:11'
            ],
            [
                
                'password.require'=>'please write your password',
                'password.max'=>'password not more than  11 charcters',
                'uname.required'=>'Please write your Username',
                'uname.min'=>'Username not Less than 5 charcters',
               
            ]


        );
    
            $c= Logins::where('Username', $req->uname)
                      ->where('Password',$req->password)
                   
                      ->first();
    
    
                        if($c){
    
                            if($c->Type=="users"){
    
    
                            session()->put('user',$req->uname); 
                          
                           
                             return view('pages.Dashboardusers');
                            
                        }
                            
                        elseif($c->Type=="admin"){
    
    
                            session()->put('admin',$req->uname); 
                            
                          
    
                           
    
                              
                            return view('pages.Dashboard'); 
                           
                            
                        }
                        elseif($c->Type=="superadmin"){
    
                            
                            session()->put('superadmin',$req->uname); 
                           
                              
                            return view('pages.Dashboardsuperadmin'); 
                           
                            
                        }
                       
         
    
                    }
                    $req->session()->flash('login_error','please enter valid Username Or password');
                    return view('pages.Login');
                }


                public function logout(){
                    session()->flush();
                    return redirect()->route('home');
                }

}
