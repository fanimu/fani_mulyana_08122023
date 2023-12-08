<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
<a href="{{ route('pegawai.index') }}">Kembali</a>

    <h1>Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <table>
            <tr>
                <td><label for="pegawai_nama">Nama:</label></td>
                <td><input type="text" name="pegawai_nama" value="{{ $pegawai->pegawai_nama }}" required><br></td>
            </tr>
            <tr>
                <td><label for="pegawai_umur">Umur:</label></td>
                <td><label for="pegawai_umur">Umur:</label></td>
            </tr>
            <tr>
                <td><label for="pegawai_alamat">Alamat:</label></td>
                <td><input type="text" name="pegawai_alamat" value="{{ $pegawai->pegawai_alamat }}" required><br></td>
            </tr>
            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" name="foto"><br></td>
            </tr>
        </table>
        <!-- @if($pegawai->foto)
            <img src="{{ asset($pegawai->foto) }}" alt="Foto Pegawai" width="100">
        @else
            Tidak Ada Foto
        @endif -->

        <br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
