<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <style>
        .btn_add{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btn_edit{
           background-color: #008CBA;
           border: none;
           color: white;
           padding: 8px 16px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
        }

        .btn_delete{
            background-color: #f44336;
            border: none;
           color: white;
           padding: 8px 16px;
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           margin: 4px 2px;
           cursor: pointer;
        }

        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Pegawai</h1>

    <a class="btn_add" href="{{ route('pegawai.create') }}">Tambah Pegawai</a>

    <table border="1" width="100%">
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
            <td>
                @if($p->foto)
                    <img width="100" src="{{ asset($p->foto) }}" alt="Foto Pegawai">
                @else
                    Tidak Ada Foto
                @endif
            </td>
            <td>
                <!-- <a href="{{ route('pegawai.show', $p->id) }}">Detail</a> -->
                <a class="btn_edit" href="{{ route('pegawai.edit', $p->id) }}">Edit</a>
                <form action="{{ route('pegawai.destroy', $p->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn_delete" type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
