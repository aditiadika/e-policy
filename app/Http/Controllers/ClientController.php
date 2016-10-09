<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        // untuk nampilin halaman awal

        $clients = DB::select('select * from client');

        return view('backend.client.index', compact('clients'));
    }

    public function create()
    {
        // untuk nampilin form input
        return view('backend.client.formcreate');
    }

    public function store(Request $request)
    {
        // untuk input data dari form ke data base
        $simpan = new Client;
        $simpan ->nomor_polis           = $request->nomor_polis;
        $simpan ->nama_pemegang         = $request->nama_pemegang;
        $simpan ->nama_tertanggung      = $request->nama_tertanggung;
        $simpan ->kirim                 = $request->kirim;
        $simpan->save();

        return redirect()->route('client.index');
    }

    public function show($id)
    {
        // untuk nampilin data 11
    }

    public function edit($id)
    {
        // untuk nampilin form edit
    }

    public function update(Request $request, $id)
    {
        // untuk update perubahan data yang ada di form edit
    }

    public function destroy($id)
    {
        // untuk delete data
    }
}
