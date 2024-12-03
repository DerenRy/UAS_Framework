<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" value="{{ old('npm') }}">
        @error('npm')<span style="color: red">{{ $message }}</span>@enderror
        <br><br>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
        @error('nama')<span style="color: red">{{ $message }}</span>@enderror
        <br><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi" value="{{ old('prodi') }}">
        @error('prodi')<span style="color: red">{{ $message }}</span>@enderror
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
