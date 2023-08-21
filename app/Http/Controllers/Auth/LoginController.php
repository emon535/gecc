<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Member;
use Session;

class LoginController extends Controller
{
    public function login(){
        if(Session::get('loggedData')){
            return redirect('/dashboard');
        }else{    
        	$this->data['headline'] = 'LOG IN';
        	return view('admin.login.login', $this->data);
        }
    }

    public function authenticate(Request $request){

    	$data =  $request->only(['email', 'password']);

        // echo '<pre>';
        // print_r($data);
        // exit();

    	if(Auth::attempt([ 'email'=>$data['email'], 'password'=>$data['password'], 'status'=>1 ])){
            
            Session::put('loggedData',Auth::user());
    		return redirect()->intended('/dashboard');

    	}else{

            return redirect()->intended('admin')->withErrors(['Invaild User email or password']);
        }
    	
    }//authenticate


    public function logout(){
        Auth::logout();
        Session::forget('loggedData');
        return redirect('/');
    }


}//LoginController