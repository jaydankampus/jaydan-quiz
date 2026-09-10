<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body class="container mt-5">

    <div class="card p-4 shadow-sm">
        <h3 class="mb-4">Tambah Data Mahasiswa</h3>
        
        <form action="/mahasiswa/store" method="POST" class="row g-3">
            @csrf
            
            <div class="col-md-12">
                <label for="Nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="Nim" name="Nim" required>
            </div>

            <div class="col-md-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

              <div class="col-md-12">
                <label for="nama" class="form-label">tempat lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>

              <div class="col-md-12">
                <label for="nama" class="form-label">tanggal lahir</label>
                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

              <div class="col-md-12">
                <label for="nama" class="form-label">jenis kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            </div>

              <div class="col-md-12">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="col-md-12">
                <label for="programstudi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="programstudi" name="programstudi" required>
            </div>

            <div class="col-md-12">
                <label for="nomortelpon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomortelpon" name="nomortelpon" required>
            </div>

              <div class="col-md-12">
                <label for="nama" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="col-12 mt-4">
                <button class="btn btn-success" type="submit">Simpan Data</button>
                <a href="/mahasiswa" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>