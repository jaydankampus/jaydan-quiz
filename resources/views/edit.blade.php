
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MAHASISWA</title>

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
            <h3 class="mb-0">Edit Data Mahasiswa</h3>
        </div>

        <div class="card-body p-4">

            <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
                @csrf

                <div class="row g-3">

                    <div class="col-md-12">
                        <label for="Nim" class="form-label">NIM</label>
                        <input type="text"
                            class="form-control"
                            id="Nim"
                            name="Nim"
                            value="{{ $mahasiswa->Nim }}">
                    </div>

                    <div class="col-md-12">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text"
                            class="form-control"
                            id="nama"
                            name="nama"
                            value="{{ $mahasiswa->nama }}">
                    </div>

                    <div class="col-md-12">
                        <label for="tempat_lahir" class="form-label">
                            Tempat Lahir
                        </label>
                        <input type="text"
                            class="form-control"
                            id="tempat_lahir"
                            name="tempat_lahir"
                            value="{{ $mahasiswa->tempat_lahir }}">
                    </div>

                    <div class="col-md-12">
                        <label for="tanggal_lahir" class="form-label">
                            Tanggal Lahir
                        </label>
                        <input type="text"
                            class="form-control"
                            id="tanggal_lahir"
                            name="tanggal_lahir"
                            value="{{ $mahasiswa->tanggal_lahir }}">
                    </div>

                    <div class="col-md-12">
                        <label for="jenis_kelamin" class="form-label">
                            Jenis Kelamin
                        </label>
                        <input type="text"
                            class="form-control"
                            id="jenis_kelamin"
                            name="jenis_kelamin"
                            value="{{ $mahasiswa->jenis_kelamin }}">
                    </div>

                    <div class="col-md-12">
                        <label for="alamat" class="form-label">
                            Alamat
                        </label>
                        <input type="text"
                            class="form-control"
                            id="alamat"
                            name="alamat"
                            value="{{ $mahasiswa->alamat }}">
                    </div>

                    <div class="col-md-12">
                        <label for="programstudi" class="form-label">
                            Program Studi
                        </label>
                        <input type="text"
                            class="form-control"
                            id="programstudi"
                            name="programstudi"
                            value="{{ $mahasiswa->programstudi }}">
                    </div>

                    <div class="col-md-12">
                        <label for="nomortelpon" class="form-label">
                            Nomor Telepon
                        </label>
                        <input type="text"
                            class="form-control"
                            id="nomortelpon"
                            name="nomortelpon"
                            value="{{ $mahasiswa->nomortelpon }}">
                    </div>

                    <div class="col-md-12">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ $mahasiswa->email }}">
                    </div>

                    <div class="col-12 mt-4">

                        <button class="btn btn-primary px-4" type="submit">
                            Simpan Perubahan
                        </button>

                        <a href="/mahasiswa" class="btn btn-secondary px-4">
                            Kembali
                        </a>

                    </div>

                </div>

            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
