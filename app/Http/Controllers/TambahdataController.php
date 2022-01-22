<?php

namespace App\Http\Controllers;
use App\Models\slip_gajih;
use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Exports\slip_gajihExport;
use App\Exports\UserExport;
use RealRashid\SweetAlert\Facades\Alert;


class TambahdataController extends Controller
{
    public function ini(){
        $Jab  =   User::all();
        return view('Tambahdata',compact('Jab'));
    }


    public function savedata(Request $request){
        //dd($request->all());
        slip_gajih::create([
   'user_id'=>$request->user_id,
   'tanggal'=>$request->tanggal,
   'jenis_pekerjaan'=>$request->jenis_pekerjaan,
   'pembayaran'=>$request->pembayaran,
   'makan'=>$request->makan,
   'transport'=>$request->transport,
   'parkir'=>$request->parkir,
   'total'=>$request->total,
    'status'=>$request->status,
        ]);
        Alert::success('Congrats', 'data sudah tersimpan');
        $Jab  =   User::all();
        return view('Tambahdata',compact('Jab'));
    }
    public function view(){
        $Jab  =   User::all();
        return view('Edit',compact('Jab'));
    }
    public function update($id){
        
        $Jab  =   User::all();
        $ganti = slip_gajih::with('user')->findorfail($id);
        return view('Edit',compact('ganti'),compact('Jab'));
    }
    public function ubah(Request $request,$id){
        $Jab  =   User::all();
        $ganti = slip_gajih::with('user')->findorfail($id);
        $ganti->update($request->all());
        Alert::success('Congrats', 'data sudah diubah');
        return view('Edit',compact('ganti'),compact('Jab'));
    }
   
    public function slipexport(){
        return Excel::download(new slip_gajihExport,'slipgajih.xlsx');
    }
    public function Userexport(){
        return Excel::download(new UserExport,'User.xlsx');
    }
}
