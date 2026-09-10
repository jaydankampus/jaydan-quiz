<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary shadow">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                Data Mahasiswa
            </span>
        </div>
    </nav>

    <div class="container mt-5">

        <!-- Judul dan Tombol Tambah -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Daftar Mahasiswa</h2>
                <p class="text-muted mb-0">
                    Berikut adalah data mahasiswa yang tersedia
                </p>
            </div>

            <a href="/tambah" class="btn btn-success">
                + Tambah Data
            </a>
        </div>

        <!-- Card -->
        <div class="card shadow border-0">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover table-bordered align-middle text-center">

                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Program Studi</th>
                                <th>No. Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->Nim }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->tempat_lahir }}</td>
                                <td>{{ $user->tanggal_lahir }}</td>
                                <td>{{ $user->jenis_kelamin }}</td>
                                <td>{{ $user->alamat }}</td>
                                <td>{{ $user->programstudi }}</td>
                                <td>{{ $user->nomortelpon }}</td>
                                <td>{{ $user->email }}</td>

                                <td>
                                    <div class="d-flex gap-2 justify-content-center">

                                        <a class="btn btn-warning btn-sm"
                                            href="/mahasiswa/edit/{{ $user->id }}">
                                            Edit
                                        </a>

                                        <a class="btn btn-danger btn-sm"
                                            href="/mahasiswa/hapus/{{ $user->id }}"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </a>

                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="11" class="text-center text-muted">
                                    Data mahasiswa belum tersedia
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>