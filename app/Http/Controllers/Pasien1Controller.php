<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapasien;

class Pasien1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil semua data di models datapasien lalu akan disimpan di variabel $pasien
        $pasien = datapasien::all();
        return view('pasien.pas_index',compact(['pasien'])); //yg di dlm compact harus sama ky variablenya $
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        $data_create= [
            'no_rm'=>$request->input('no_rm'),
            'nama_pasien'=>$request->input('nama_pasien'),
            'alamat'=>$request->input('alamat'),
            'jk'=>$request->input('jk'),
            'no_hp'=>$request->input('no_hp'),
            'tgl_lahir'=>$request->input('tgl_lahir'),
        ];
        datapasien::create($data_create);
        return redirect('/pasien');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $no_rm)
    {
        $pasien = datapasien::where('no_rm', $no_rm)->first();
        return view('pasien.edit')->with('p',$pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_create= [
            // 'no_rm'=>$request->input('no_rm'),
            'nama_pasien'=>$request->input('nama_pasien'),
            'alamat'=>$request->input('alamat'),
            'jk'=>$request->input('jk'),
            'no_hp'=>$request->input('no_hp'),
            'tgl_lahir'=>$request->input('tgl_lahir'),
        ];
        datapasien::where('no_rm', $id)->update($data_create);
        return redirect('/pasien');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        datapasien::where('no_rm',$id)->delete();
        return redirect('pasien');
    }
}
