<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\Pasien;
use App\Models\Paramedik;

class PeriksaController extends Controller
{
    public function index()
    {
        $periksa = Periksa::all();
        return view('periksa', compact('periksa'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $dokters = Paramedik::all();
        return view('tambah.periksa', compact('pasiens', 'dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tensi' => 'required|numeric',
            'keterangan' => 'required',
            'pasien_id' => 'required',
            'dokter_id' => 'required'
        ]);
        $periksa = new Periksa;
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->dokter_id = $request->dokter_id;
        $periksa->save();
        return redirect()->route('periksa')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $periksa = Periksa::findOrFail($id);
        $pasiens = Pasien::all();
        $dokters = Paramedik::all();
        return view('edit.periksa', compact('periksa', 'pasiens', 'dokters'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'berat' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'tensi' => 'required|numeric',
            'keterangan' => 'required',
            'pasien_id' => 'required',
            'dokter_id' => 'required'
        ]);
        $periksa = Periksa::findOrFail($id);
        $periksa->tanggal = $request->tanggal;
        $periksa->berat = $request->berat;
        $periksa->tinggi = $request->tinggi;
        $periksa->tensi = $request->tensi;
        $periksa->keterangan = $request->keterangan;
        $periksa->pasien_id = $request->pasien_id;
        $periksa->dokter_id = $request->dokter_id;
        $periksa->save();
        return redirect()->route('periksa')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $periksa = Periksa::findOrFail($id);
        $periksa->delete();
        return redirect()->route('periksa')->with('success', 'Data Berhasil Dihapus!');
    }
}
