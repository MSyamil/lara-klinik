@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="container mt-4">
    <h2>Tambah Data Kelurahan</h2>
    <form action="{{ route('kelurahan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kelurahan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ route('kelurahan') }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


@include('layouts.bottom')
