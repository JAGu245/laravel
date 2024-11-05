<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Karyawan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="pangkat" class="form-label">Pangkat</label>
                <input type="text" class="form-control" id="pangkat" name="pangkat" required>
            </div>
            <div class="mb-3">
                <label for="divisi" class="form-label">Divisi</label>
                <input type="text" class="form-control" id="divisi" name="divisi" required>
            </div>
            <div class="mb-3">
                <label for="dealer" class="form-label">Dealer</label>
                <input type="text" class="form-control" id="dealer" name="dealer" required>
            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <input type="text" class="form-control" id="posisi" name="posisi" required>
            </div>
            <div class="mb-3">
                <label for="divisi_ho" class="form-label">Divisi HO</label>
                <input type="text" class="form-control" id="divisi_ho" name="divisi_ho">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
