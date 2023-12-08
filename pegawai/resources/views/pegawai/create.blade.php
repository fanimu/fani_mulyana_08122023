<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pegawai</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>

    <form action="{{ route('pegawai.store') }}" method="post">
        @csrf
        <label for="pegawai_nama">Nama:</label>
        <input type="text" name="pegawai_nama" required><br>

        <label for="pegawai_umur">Umur:</label>
        <input type="number" name="pegawai_umur" required><br>

        <label for="pegawai_alamat">Alamat:</label>
        <input type="text" name="pegawai_alamat" required><br>

        <label for="foto">Foto:</label>
        <input type="text" name="foto"><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
