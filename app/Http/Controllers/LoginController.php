<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
class LoginController extends Controller
{
    public function adminlogin(){
        return view('adminpanel.login');
    }
    public function ProcessLoginAdmin(Request $req){

          $req->validate(
            [
            'email'=>'required|email',
            'password'=>'required',
          ]
        );
          $email=$req->email;
          $password=$req->password;
          $admindata=Admin::where('email', $email);
          echo "<pre>";
          print_r($admindata);
          echo "</pre>";
          exit;
          
    }
}
