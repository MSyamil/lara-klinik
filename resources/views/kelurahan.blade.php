@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h1 class="text-center mb-2">List Kelurahan</h1>
    <a href="{{ route('tambah.kelurahan') }}" class="btn btn-primary mb-3">Tambah Kelurahan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelurahan as $kel)
                <tr>
                    <td class="col-1 text-center">{{ $loop->iteration }}</td>
                    <td>{{ $kel->nama }}</td>
                    <td class="col-2 text-center">
                        <a href="{{ route('edit.kelurahan', $kel->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kelurahan.destroy', $kel->id) }}" method="POST" class="d-inline delete-form">
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