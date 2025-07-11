@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h2 class="text-center mb-2">Tambah Paramedik</h2>
    <form action="{{ route('paramedik.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Paramedik</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control @error('tmp_lahir') is-invalid @enderror" id="tmp_lahir" name="tmp_lahir" value="{{ old('tmp_lahir') }}">
                @error('tmp_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                @error('tgl_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">   
            <div class="mb-3 col-md-6">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" value="{{ old('kategori') }}">
                @error('kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="telpon" class="form-label">telpon</label>
                <input type="text" class="form-control @error('telpon') is-invalid @enderror" id="telpon" name="telpon" value="{{ old('telpon') }}">
                @error('telpon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
            @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                <select class="form-select @error('unit_kerja_id') is-invalid @enderror" id="unit_kerja_id" name="unit_kerja_id">
                    @foreach ($unitkerja as $uk)
                        <option value="{{ $uk->id }}">{{ $uk->nama }}</option>
                    @endforeach
                </select>
            @error('unit_kerja_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ route('paramedik') }}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@include('layouts.bottom')