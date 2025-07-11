@include('layouts.top')
@include('layouts.navbar')
@include('layouts.sidebar')

<div>
    <h1 class="text-center mb-2">List Kelurahan</h1>
    <a href="{{ route('tambah.pasien') }}" class="btn btn-primary mb-3">Tambah Pasien</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>email</th>
                <th>Kelurahan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $ps)
                <tr>
                    <td class="col-1 text-center">{{ $loop->iteration }}</td>
                    <td>{{ $ps['kode'] }}</td>
                    <td>{{ $ps['nama'] }}</td>
                    <td>@if ($ps['gender'] == 'L') Laki-laki @else Perempuan @endif</td>
                    <td>{{ $ps['email'] }}</td>
                    <td>{{ $ps->kelurahan['nama'] }}</td>
                    <td class="col-2 text-center">
                        <a href="{{ route('edit.pasien', $ps->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pasien.destroy', $ps->id) }}" method="POST" class="d-inline delete-form">
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