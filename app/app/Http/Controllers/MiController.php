<?php

namespace App\Http\Controllers;
use App\Mi;
use Illuminate\Http\Request;

class MiController extends Controller
{ 
    
    public function create()
    {
        return view('mi.create');
    }

    public function store()
    {
        Mi::create([
            'nama' => request('nama'),
            'jenis_kelamin' => request('jenis_kelamin')
        ]);
        return view('mi.create')->withSuccess('Data Berhasil di Simpan');
    }

    public function index()
    {
        $data = Mi::all();
        return view('mi.index', compact('data'));
    }
}
