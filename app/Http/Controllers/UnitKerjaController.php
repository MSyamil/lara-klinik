<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unitkerja;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unitkerja = Unitkerja::all();
        return view('unitkerja', compact('unitkerja'));
    }

    public function create()
    {
        return view('tambah.unitkerja');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|min:3|string|unique:unit_kerja,nama'
        ]);
        $unitkerja = new Unitkerja;
        $unitkerja->nama = $request->nama;
        $unitkerja->save();
        return redirect()->route('unitkerja')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $unitkerja = Unitkerja::findOrFail($id);
        return view('edit.unitkerja', compact('unitkerja'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required|min:3|string|unique:unit_kerja,unit_kerja,'.$id
        ]);
        $unitkerja = Unitkerja::findOrFail($id);
        $unitkerja->nama = $request->nama;
        $unitkerja->save();
        return redirect()->route('unitkerja')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $unitkerja = Unitkerja::findOrFail($id);
        $unitkerja->delete();
        return redirect()->route('unitkerja')->with('success', 'Data Berhasil Dihapus!');
    }
}
