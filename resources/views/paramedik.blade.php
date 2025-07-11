@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h1 class="text-center mb-2">List Paramedik</h1>
    <a href="{{ route('tambah.paramedik') }}" class="btn btn-primary mb-3">Tambah Paramedik</a>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th>Gender</th>
                <th>Kategori</th>
                <th>Telpon</th>
                <th>unit kerja</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paramedik as $pd)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pd['nama'] }}</td>
                <td>@if ($pd['gender'] == 'L') Laki-laki @else Perempuan @endif</td>
                <td>{{ $pd['kategori'] }}</td>
                <td>{{ $pd['telpon'] }}</td>
                <td>{{ $pd->unitKerja['nama'] }}</td>
                <td class="text-center col-2">
                    <a href="{{ route('edit.paramedik', $pd->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('paramedik.destroy', $pd->id) }}" method="POST" class="d-inline delete-form">
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