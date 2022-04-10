<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class users extends Controller
{
   public function list()
   {

     //return Session::get('logData');
      $user = User::all(['name' , 'email' , 'id']);

     return view('userlist',['user'=> $user]);
    
   }

   function create()
   {
    return view('create');
   }
   public function loginsubmit(Request $req)
   {
    //print_r($req->input());
     User::select('*')->where(
       [ ['email' , '=' , $req->email],
        ['password' , '=' , $req->password]]
    )->get();
    
    $req->session()->put('logData',[$req->input()]);
    return redirect('/list');

   }
   public function createsubmit(Request $req)
   {
      $user = new User;
    //  $user->name = 'Some name';
      $user->name=$req->name;
      $user->email=$req->email;
      $user->password=$req->password;
      $result=$user->save();

      if($result)
      {
         $req->session()->put('logData',[$req->input()]);
         return redirect('/list');
      }
   }

   
    }
