@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h1 class="text-center mb-2">List Periksa</h1>
    <a href="{{ route('tambah.unitkerja') }}" class="btn btn-primary mb-3">Tambah Unit Kerja</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unitkerja as $uk)
                <tr>
                    <td class="col-1 text-center">{{ $loop->iteration }}</td>
                    <td>{{ $uk['nama'] }}</td>
                    <td class="col-2 text-center">
                        <a href="{{ route('edit.unitkerja', $uk->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('unitkerja.destroy', $uk->id) }}" method="POST" class="d-inline delete-form">
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