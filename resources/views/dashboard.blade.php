{{-- dashboard --}}
@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')
    <!-- Statistik -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-person fs-1 text-primary"></i>
                    </div>
                    <p class="card-text">Total Pasien</p>
                    <h3>{{ $totalPasien }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                    </div>
                    <p class="card-text">Total Paramedik</p>
                    <h3>{{ $totalParamedik }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-calendar-event fs-1 text-primary"></i>
                    </div>
                    <p class="card-text">Periksa Bulan Ini</p>
                    <h3>{{ $totalPeriksa }}</h3>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <!-- Pasien Terbaru -->
    <div class="card mb-4 col-md-5 mx-auto">
        <div class="card-header">
            Pasien Terbaru
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kelurahan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasienTerbaru as $pasien)
                        <tr>
                            <td>{{ $pasien['nama'] }}</td>
                            <td>{{ $pasien->kelurahan['nama'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Periksa Terbaru -->
    <div class="card mb-4 col-md-5 mx-auto">
        <div class="card-header">
            Periksa Terbaru
        </div>
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Pasien</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periksaTerbaru as $periksa)
                        <tr>
                            <td>{{ $periksa->pasien['nama'] }}</td>
                            <td>{{ $periksa['keterangan'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@include('layouts.bottom')
