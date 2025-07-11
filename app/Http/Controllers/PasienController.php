<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Kelurahan;

class PasienController extends Controller
{
    public function index()
    {
        // urut berdasarkan kode
        $pasien = Pasien::orderBy('kode', 'asc')->get();
        return view('pasien', compact('pasien'));
    }

    public function create()
    {
        $kelurahans = Kelurahan::all();
        return view('tambah.pasien', compact('kelurahans'));
    }

    // store data(kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id)
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|min:3|string|unique:pasien,kode',
            'nama' => 'required|min:3|string',
            'tmp_lahir' => 'required|min:3|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email',
            'alamat' => 'required|min:3|string',
            'kelurahan_id' => 'required|numeric',
        ]);
        $pasien = new Pasien;
        $pasien->kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->gender = $request->gender;
        $pasien->email = $request->email;
        $pasien->alamat = $request->alamat;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();

        return redirect()->route('pasien')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $pasien = Pasien::FindOrFail($id);
        $kelurahans = Kelurahan::all();
        return view('edit.pasien', compact('pasien', 'kelurahans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|min:3|string|unique:pasien,kode,'.$id,
            'nama' => 'required|min:3|string',
            'tmp_lahir' => 'required|min:3|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email',
            'alamat' => 'required|min:3|string',
            'kelurahan_id' => 'required|numeric',
        ]);
        $pasien = Pasien::FindOrFail($id);
        $pasien->kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->gender = $request->gender;
        $pasien->email = $request->email;
        $pasien->alamat = $request->alamat;
        $pasien->kelurahan_id = $request->kelurahan_id;
        $pasien->save();

        return redirect()->route('pasien')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $pasien = Pasien::FindOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien')->with('success', 'Data Berhasil Dihapus!');
    }
}
