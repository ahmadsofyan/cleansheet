<?php

namespace App\Http\Controllers;
use App\Models\slip_gajih;
use Illuminate\Http\Request;

class TambahdataController extends Controller
{
    public function savedata(Request $request){
        //dd($request->all());
        slip_gajih::create([
   'user_id'=>$request->user_id,
   'tanggal'=>$request->tanggal,
   'jenis_pekerjaan'=>$request->jenis_pekerjaan,
   'durasi'=>$request->durasi,
   'pembayaran'=>$request->pembayaran,
   'makan'=>$request->makan,
   'transport'=>$request->transport,
   'total'=>$request->total,
    'status'=>$request->status,
        ]);
        return view('Tambahdata');
    }
}
