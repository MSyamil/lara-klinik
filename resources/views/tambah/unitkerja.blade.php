@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div class="container mt-4">
    <h2>Tambah Data Unit Kerja</h2>
    <form action="{{ route('unitkerja.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Unit Kerja</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ route('unitkerja') }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


@include('layouts.bottom')
    