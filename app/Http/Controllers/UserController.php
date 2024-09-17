<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(Request $req){
     $req->validate([
       'username' => 'required:string',
       'useremail' => 'required|email',
       'password' => 'required|min:6|alpha_num',
       'phonenumber' => 'required|numeric',
       'userage' => 'required|numeric|min:18',
       'usercity' => 'required',
       'imageupload' => 'required|max:1024'


     ],[

        "username.required" => 'please enter your name!',
        "useremail.required" => 'please enter your email id!',
        "username.email" => 'please enter a valid email address!',
        "password.required" => 'please enter your password!',
        "password.min" => 'minimum 6 characters are required!',
        "phonenumber.required" => 'please enter your phonenumber!',
        "phonenumber.numeric" => 'please enter a valid phone number!',
        "phonenumber.size" => 'please enter a valid phone number!',
        "userage.required" => 'please enter your age!',
        "userage.numeric" => 'please enter a valid age!',
        "userage.min" => 'age should not be less then 18!',
        "usercity.required" => 'please enter your city!',
        'imageupload.required' => 'please upload your file!',
        'imageupload.mimes' => 'please upload file only in a jpg,jpeg,png,pdf,docx!' ,
        'imageupload.max' => 'only 1mb files requred!' ,
        
    
     ]
    
    
    );

  
    return redirect('/')->with('success', 'Form submitted successfully!');
 

    }
}
