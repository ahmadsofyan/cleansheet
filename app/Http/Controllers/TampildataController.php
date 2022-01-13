<?php

namespace App\Http\Controllers;
use App\Models\slip_gajih;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class TampildataController extends Controller
{
    public function tampildata()
{
    $slip_gajihs  = slip_gajih::with('user')->latest()->paginate(5);
    Paginator::useBootstrap();
    return view('/DashboardAdmin', compact('slip_gajihs'));
    }

    public function hapusdata(Request $request,$id){
        $ganti = slip_gajih::findorfail($id);
        $ganti->delete();
        Alert::success('Congrats', 'data sudah dihapus');
        return back();
    }

     public function tampilmitra(){
       
        $mitra = slip_gajih::with('user')->get();
        
         return view('DashboardMitra', ['mitra' =>  $mitra]);
     }

}
