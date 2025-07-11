<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('kelurahan', compact('kelurahan'));
    }

    public function create()
    {
        return view('tambah.kelurahan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|string|unique:kelurahan,nama',
        ]);
        $kelurahan = new Kelurahan;
        $kelurahan->nama = $request->nama;
        $kelurahan->kec_id = $request->kec_id ?? 1;
        $kelurahan->save();
        return redirect('kelurahan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        return view('edit.kelurahan', compact('kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:3|string|unique:kelurahan,nama',
        ]);
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->nama = $request->nama;
        $kelurahan->kec_id = $request->kec_id ?? 1;
        $kelurahan->save();
        return redirect('kelurahan')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect('kelurahan')->with('success', 'Data Berhasil Dihapus!');
    }
}
