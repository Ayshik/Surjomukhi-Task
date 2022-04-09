<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use App\Models\Superadmins;
use App\Models\Users;
use App\Models\Logins;

class SignupController extends Controller
{
    public function signupusers(Request $request){
       
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|regex:/^[A-Za-z]+$/',
                'uname'=>'required|min:5|unique:users,Username',
                'phone'=>'required|digits:11',
                'address'=>'required|max:20|min:5',
                'password'=>'required|max:11',
               
               
                
            ],
            [
                'name.required'=>'Please write your name',
                'uname.required'=>'Please write your Username',
                'uname.min'=>'Username not Less than 5 charcters',
                'uname.unique'=>'Username already exists try another',
                'name.min'=>'Name must be greater than 2 charcters',
                'password.max'=>'password not more than 11 charcters',
                'uname.unique'=>'Username already exists try another',
                'phone'=>'Please write your Phone No',
                'phone.digits'=>'Please no must be 11 digits',
                'address.required'=>'Please write your Address',
                'address.max'=>'Address not more than 20 charcters',
                'address.min'=>'Address not less than 5 charcters',
            ]
        );

        $var = new Users();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
        $var->Phoneno = $request->phone;
        $var->Address = $request->address;
        $var->Password = $request->password;
        $var->save();


        $var = new Logins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
       // $var->password = md5($request->password);
       $var->Password = $request->password;
        $var->Type = 'users';
        $var->save();
      


      
        return view('pages.Login');
     
    }


    public function signupadmin(Request $request){
       
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|regex:/^[A-Za-z]+$/',
                'uname'=>'required|min:5|unique:users,Username',
                'phone'=>'required|digits:11',
                'address'=>'required|max:20|min:5',
                'password'=>'required|max:11',
               
               
                
            ],
            [
                'name.required'=>'Please write your name',
                'uname.required'=>'Please write your Username',
                'uname.min'=>'Username not Less than 5 charcters',
                'name.min'=>'Name must be greater than 2 charcters',
                'password.max'=>'password not more than 11 charcters',
                'uname.unique'=>'Username already exists try another',
                'phone'=>'Please write your Phone No',
                'phone.digits'=>'Please no must be 11 digits',
                'address.required'=>'Please write your Address',
                'address.max'=>'Address not more than 20 charcters',
                'address.min'=>'Address not less than 5 charcters',
            ]
        );

        $var = new Admins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
        $var->Phoneno = $request->phone;
        $var->Address = $request->address;
        $var->Password = $request->password;
        $var->save();


        $var = new Logins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
       // $var->password = md5($request->password);
       $var->Password = $request->password;
        $var->Type = 'admin';
        $var->save();
      


      
        return view('pages.Login');
     
    }


    public function signupsuperadmin(Request $request){
       
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|regex:/^[A-Za-z]+$/',
                'uname'=>'required|min:5|unique:users,Username',
                'phone'=>'required|digits:11',
                'address'=>'required|max:20|min:5',
                'password'=>'required|max:11',
               
               
                
            ],
            [
                'name.required'=>'Please write your name',
                'uname.required'=>'Please write your Username',
                'uname.min'=>'Username not Less than 5 charcters',
                'name.min'=>'Name must be greater than 2 charcters',
                'password.max'=>'password not more than 11 charcters',
                'uname.unique'=>'Username already exists try another',
                'phone'=>'Please write your Phone No',
                'phone.digits'=>'Please no must be 11 digits',
                'address.required'=>'Please write your Address',
                'address.max'=>'Address not more than 20 charcters',
                'address.min'=>'Address not less than 5 charcters',
            ]
        );

        $var = new Superadmins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
        $var->Phoneno = $request->phone;
        $var->Address = $request->address;
        $var->Password = $request->password;
        $var->save();


        $var = new Logins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
       // $var->password = md5($request->password);
       $var->Password = $request->password;
        $var->Type = 'superadmin';
        $var->save();
      


      
        return view('pages.Login');
     
    }

    public function signupadmin_admin(Request $request){
       
        $this->validate(
            $request,
            [
                'name'=>'required|min:2|regex:/^[A-Za-z]+$/',
                'uname'=>'required|min:5|unique:users,Username',
                'phone'=>'required|digits:11',
                'address'=>'required|max:20|min:5',
                'password'=>'required|max:11',
               
               
                
            ],
            [
                'name.required'=>'Please write your name',
                'uname.required'=>'Please write your Username',
                'uname.min'=>'Username not Less than 5 charcters',
                'name.min'=>'Name must be greater than 2 charcters',
                'password.max'=>'password not more than 11 charcters',
                'uname.unique'=>'Username already exists try another',
                'phone'=>'Please write your Phone No',
                'phone.digits'=>'Please no must be 11 digits',
                'address.required'=>'Please write your Address',
                'address.max'=>'Address not more than 20 charcters',
                'address.min'=>'Address not less than 5 charcters',
            ]
        );

        $var = new Admins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
        $var->Phoneno = $request->phone;
        $var->Address = $request->address;
        $var->Password = $request->password;
        $var->save();


        $var = new Logins();
        $var->Fullname= $request->name;
        $var->Username = $request->uname;
       // $var->password = md5($request->password);
       $var->Password = $request->password;
        $var->Type = 'admin';
        $var->save();
      


      
        return redirect()->route('admininfo');
     
    }
}
