<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>

    <a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>{{ $p->foto }}</td>
            <td>
                <a href="{{ route('pegawai.show', $p->id) }}">Detail</a>
                <a href="{{ route('pegawai.edit', $p->id) }}">Edit</a>
                <form action="{{ route('pegawai.destroy', $p->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
