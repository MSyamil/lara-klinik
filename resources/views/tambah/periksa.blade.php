@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="container mt-4">
    <h2>Tambah Data Periksa</h2>

    <form action="{{ route('periksa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Periksa</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" 
                   id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat Badan</label>
            <input type="number" class="form-control @error('berat') is-invalid @enderror" 
                   id="berat" name="berat" value="{{ old('berat') }}">
            @error('berat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tinggi" class="form-label">Tinggi Badan</label>
            <input type="number" class="form-control @error('tinggi') is-invalid @enderror" 
                   id="tinggi" name="tinggi" value="{{ old('tinggi') }}">
            @error('tinggi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tensi" class="form-label">Tensi</label>
            <input type="text" class="form-control @error('tensi') is-invalid @enderror" 
                   id="tensi" name="tensi" value="{{ old('tensi') }}">
            @error('tensi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" 
                   id="keterangan" name="keterangan" value="{{ old('keterangan') }}">
            @error('keterangan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select class="form-control @error('pasien_id') is-invalid @enderror" id="pasien_id" name="pasien_id">
                <option value="">-- Pilih Pasien --</option>
                @foreach ($pasiens as $pasien)
                    <option value="{{ $pasien->id }}">{{ $pasien->kode }} - {{ $pasien->nama }}</option>
                @endforeach
            </select>
            @error('pasien_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="dokter_id" class="form-label">Dokter</label>
            <select class="form-control @error('dokter_id') is-invalid @enderror" id="dokter_id" name="dokter_id">
                <option value="">-- Pilih Dokter --</option>
                @foreach ($dokters as $dokter)
                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endforeach
            </select>
            @error('dokter_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@include('layouts.bottom')