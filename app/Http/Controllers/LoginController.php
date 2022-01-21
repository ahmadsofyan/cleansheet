<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        
        if(Auth::attempt($request->only('name','email','password'))){
            
            return redirect('/DashboardAdmin');
        }
        Alert::error('Login Gagal', ' silahkan coba kembali');
        return redirect ('login');
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('login');
    }
    public function saveregis (Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'norek'=>$request->norek,
            'Bank'=>$request->Bank,
            'remember_token'=>Str::random(60),
        ]);
        Alert::success('Congrats', 'registrasi berhasil');
        return view('Registrasi');
    }
 
}
