<?php

namespace App\Http\Controllers;
use App\Models\slip_gajih;


use Illuminate\Http\Request;

class TampildataController extends Controller
{
    public function tampildata()
{
    $slip_gajihs  =  slip_gajih::select('*')
             ->get();
   
   
             
   return view('/DashboardAdmin', ['slip_gajihs' => $slip_gajihs]);
    }
}
