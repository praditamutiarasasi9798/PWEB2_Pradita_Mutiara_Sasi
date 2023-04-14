<?php

namespace App\Http\Controllers;

use App\Models\daftarpas;
use Illuminate\Http\Request;

class DaftarController extends Controller
{

    public function daftarpasien(){
        //ambil semua data di models datapasien lalu akan disimpan di variabel $pasien
        $pasien = daftarpas::all();
        return view('daftar.daftarpasien',compact(['pasien'])); //yg di dlm compact harus sama ky variablenya $
    }


    // public function store(Request $request)
    // {
    //     // dd($request->except(['_token','submit']));
    //     datapasien::create ($request->except(['_token','submit']));
    //     return redirect('/pasien');
    // }
}
