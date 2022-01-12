<?php

namespace App\Http\Controllers;
use App\Models\slip_gajih;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class TampildataController extends Controller
{
    public function tampildata()
{
    $slip_gajihs  = slip_gajih::with('user')->latest()->paginate(1000);
             
   return view('/DashboardAdmin', compact('slip_gajihs'));
    }

    public function hapusdata(Request $request,$id){
        $ganti = slip_gajih::findorfail($id);
        $ganti->delete();
        Alert::success('Congrats', 'data sudah dihapus');
        return back();
    }


}
