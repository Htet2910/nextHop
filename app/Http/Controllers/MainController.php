<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
   public function index()
    {
        return view('backend.login');
    }
    public function checklogin(Request $request)
    {

        $this->validate($request,[
            'login_name'=>'required|string',
            // 'email'=>'required|email',
            'password'=>'required|string|min:8'
        ]);

       $user_data=array(
           "login_name"=>$request->get('login_name'),
           // "email"=>$request->get('email'),
           "password"=>$request->get('password')
       );

       if (Auth::attempt($user_data)) {
            // Authentication passed...
            return redirect()->intended('backend/navbars');
        }
    return redirect('/backend')->with('error', 'Oppes! You have entered invalid credentials');

    }

    public function logout() {
      Auth::logout();

      return redirect('/');
    }
}
