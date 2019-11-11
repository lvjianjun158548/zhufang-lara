<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index(){
    	return view('admin.login.index');
    }

    public function login(Request $request){
    	$data = $this->validate($request,[
    		'username'=>'required',
    		'password'=>'required',
    		]);
    	$bool = auth()->attempt($data);
    	if($bool){
            return redirect(route('admin.login'))->withErrors(['error'=>"密码错误"]);
        }
    }

}
