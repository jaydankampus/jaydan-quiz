
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .card {
            border: none;
            border-radius: 15px;
        }

        .judul {
            background-color: #0d6efd;
            color: white;
            border-radius: 15px 15px 0 0;
            padding: 18px 20px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn {
            border-radius: 8px;
        }
    </style>
</head>

<body class="container mt-5 mb-5">

    <div class="card shadow">

        <div class="judul">
            <h3 class="mb-0">Tambah Data Mahasiswa</h3>
        </div>

        <div class="card-body p-4">

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
                    <label for="nama" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>

                <div class="col-md-12">
                    <label for="nama" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <div class="col-md-12">
                    <label for="nama" class="form-label">Jenis Kelamin</label>
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
                    <label for="nama" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>

                <div class="col-12 mt-4">
                    <button class="btn btn-success px-4" type="submit">
                        Simpan Data
                    </button>

                    <a href="/mahasiswa" class="btn btn-secondary px-4">
                        Batal
                    </a>
                </div>

            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
```