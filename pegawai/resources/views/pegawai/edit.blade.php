<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
</head>
<body>
    <h1>Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="pegawai_nama">Nama:</label>
        <input type="text" name="pegawai_nama" value="{{ $pegawai->pegawai_nama }}" required><br>

        <label for="pegawai_umur">Umur:</label>
        <input type="number" name="pegawai_umur" value="{{ $pegawai->pegawai_umur }}" required><br>

        <label for="pegawai_alamat">Alamat:</label>
        <input type="text" name="pegawai_alamat" value="{{ $pegawai->pegawai_alamat }}" required><br>

        <label for="foto">Foto:</label>
        <input type="text" name="foto" value="{{ $pegawai->foto }}"><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('pegawai.index') }}">Kembali</a>
</body>
</html>
