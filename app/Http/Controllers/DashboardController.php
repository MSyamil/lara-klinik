<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Periksa;
use App\Models\Paramedik;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard()
{
    $pasienTerbaru = Pasien::with('kelurahan')->orderBy('id', 'desc')->take(3)->get();

    $periksaTerbaru = Periksa::with(['pasien', 'paramedik.unitKerja'])
                        ->orderBy('tanggal', 'desc')
                        ->take(3)
                        ->get();

    $totalPasien = Pasien::count();
    $totalParamedik = Paramedik::count();
    $totalPeriksa = Periksa::whereMonth('tanggal', Carbon::now()->month)
    ->whereYear('tanggal', Carbon::now()->year)
    ->count();

    return view('dashboard', compact('pasienTerbaru', 'periksaTerbaru', 'totalPasien', 'totalParamedik', 'totalPeriksa'));
}
}
