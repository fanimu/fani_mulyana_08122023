<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
<a href="{{ route('pegawai.index') }}">Kembali</a>

    <h1>Tambah Pegawai</h1>
    <form action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td><label for="pegawai_nama">Nama:</label></td>
                <td><input type="text" name="pegawai_nama" required><br></td>
            </tr>
            <tr>
                <td><label for="pegawai_umur">Umur:</label></td>
                <td><input type="number" name="pegawai_umur" required><br></td>
            </tr>
            <tr>
                <td><label for="pegawai_alamat">Alamat:</label></td>
                <td><input type="text" name="pegawai_alamat" required><br></td>
            </tr>
            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" name="foto"><br></td>
            </tr>
        </table>
       
            <br>
            <button type="submit">Simpan</button>
        
    </form>

</body>
</html>
