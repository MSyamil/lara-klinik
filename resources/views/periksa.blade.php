@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h1 class="text-center mb-2">List Periksa</h1>
    <a href="{{ route('tambah.periksa') }}" class="btn btn-primary mb-3">Tambah Periksa</a>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Nama Pasien</th>
                <th>Nama Paramedik</th>
                <th>Tanggal Periksa</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periksa as $pr)
                <tr>
                    <td class="col-1 text-center">{{ $loop->iteration }}</td>
                    <td>{{ $pr->pasien['nama'] }}</td>
                    <td>{{ $pr->paramedik['nama'] }}</td>
                    <td>{{ $pr['tanggal'] }}</td>
                    <td>{{ $pr['keterangan'] }}</td>
                    <td class="col-2 text-center">
                        <a href="{{ route('edit.periksa', $pr->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('periksa.destroy', $pr->id) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('layouts.bottom')