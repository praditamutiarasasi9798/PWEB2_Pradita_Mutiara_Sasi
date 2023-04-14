<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapasien;

class PasienController extends Controller
{
    public function pas_index(){
        //ambil semua data di models datapasien lalu akan disimpan di variabel $pasien
        $pasien = datapasien::all();
        return view('pasien.pas_index',compact(['pasien'])); //yg di dlm compact harus sama ky variablenya $
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        datapasien::create ($request->except(['_token','submit']));
        return redirect('/pasien');
    }
    public function edit($no_rm)
    {
        $pasien = datapasien::find($no_rm);
        // dd($pasien);
        return view('pasien.edit', compact('pasien'));
        // return view('pasien.edit');
    }
}
