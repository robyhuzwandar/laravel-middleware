<?php

namespace App\Http\Controllers;

use App\Mi;
use Illuminate\Http\Request;

class MiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Mi::all();

        return view('mi.index', compact('data'));
    }

    public function create()
    {
        return view('mi.create');
    }

    public function store(Request $request)
    {
        Mi::create([
            'name' => $request->name,
            'gender' => $request->gender,
        ]);

        return view('mi.create')->withSuccess('Data Berhasil di Simpan');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
       $data = Mi::find($id);
       return view('mi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Mi::find($id);
        $data->update([
            'name' => $request->name,
            'gender' => $request->gender,
        ]);
        return redirect(route('mi.index'));
    }

    public function destroy(Mi $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
