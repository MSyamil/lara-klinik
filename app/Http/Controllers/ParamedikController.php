<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paramedik;
use App\Models\UnitKerja;

class ParamedikController extends Controller
{
    public function index()
    {
        $paramedik = Paramedik::all();
        return view('paramedik', compact('paramedik'));
    }

    public function create()
    {
        $unitkerja = UnitKerja::all();
        return view('tambah.paramedik', compact('unitkerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|string|max:50',
            'gender' => 'required',
            'tmp_lahir' => 'required|min:3|string',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required|min:3|string|max:50',
            'telpon' => 'required|numeric',
            'alamat' => 'required|min:3|string',
            'unit_kerja_id' => 'required|numeric',

        ]);
        $paramedik = new Paramedik;
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->kategori = $request->kategori;
        $paramedik->telpon = $request->telpon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();
        return redirect()->route('paramedik')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        $unitkerja = UnitKerja::all();
        return view('edit.paramedik', compact('paramedik', 'unitkerja'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3|string|unique:paramedik,nama,'.$id,
            'gender' => 'required',
            'tmp_lahir' => 'required|min:3|string',
            'tgl_lahir' => 'required|date',
            'kategori' => 'required|min:3|string|max:50',
            'telpon' => 'required|numeric',
            'alamat' => 'required|min:3|string',
            'unit_kerja_id' => 'required|numeric',
        ]);
        $paramedik = Paramedik::findOrFail($id);
        $paramedik->nama = $request->nama;
        $paramedik->gender = $request->gender;
        $paramedik->tmp_lahir = $request->tmp_lahir;
        $paramedik->tgl_lahir = $request->tgl_lahir;
        $paramedik->kategori = $request->kategori;
        $paramedik->telpon = $request->telpon;
        $paramedik->alamat = $request->alamat;
        $paramedik->unit_kerja_id = $request->unit_kerja_id;
        $paramedik->save();
        return redirect()->route('paramedik')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        $paramedik->delete();
        return redirect()->route('paramedik')->with('success', 'Data Berhasil Dihapus!');
    }
}
