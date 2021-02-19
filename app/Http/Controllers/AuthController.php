<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AuthController extends Controller
{
    //
    public function login(Request $request){
      if($request->isMethod('POST')){
          $vald=$request->validate([
              'email'=>'required',
              'password'=>'required'
          ]);
          if(auth()->attempt($vald)){
              if(auth()->user()->role->id==1){
                  //return view('AdminView\index');
                  return redirect()->route('admin.index');
              }
              else if(auth()->user()->role->id==2){
                 return redirect()->route('user.index');
              }

          }
          else{
              return redirect()->route('login')->with('msg','البريد الالكتروني او كلمة المرور غير صحيحه ');
          }
      }
        return view ('login');
    }

    public function logout(){

       auth()->logout();
        \Illuminate\Support\Facades\Session::flush();
        return redirect('/');
    }
}
