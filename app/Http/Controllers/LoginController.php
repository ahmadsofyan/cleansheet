<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        
        if(Auth::attempt($request->only('name','email','password'))){
            return redirect('/DashboardAdmin');
        }
        return redirect ('login');
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('login');
    }
    public function saveregis (Request $request){
        //dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'remember_token'=>Str::random(60),
        ]);
        return view('Registrasi');
    }
 
}
