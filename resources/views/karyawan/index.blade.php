<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Karyawan</h1>

        <!-- Tombol untuk menambah karyawan -->
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>

        <table class="table">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Divisi</th>
                    <th>Dealer</th>
                    <th>Posisi</th>
                    <th>Divisi HO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nik }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->pangkat }}</td>
                    <td>{{ $karyawan->divisi }}</td>
                    <td>{{ $karyawan->dealer }}</td>
                    <td>{{ $karyawan->posisi }}</td>
                    <td>{{ $karyawan->divisi_ho }}</td> <!-- Menambahkan kolom Divisi HO -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
