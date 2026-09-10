<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <p>ini halaman mahasiswa</p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nim</th>
                <th scope="col">nama</th>
                <th scope="col">tempat lahir</th>
                <th scope="col">tanggal lahir</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">alamat</th>
                <th scope="col">program studi</th>
                <th scope="col">nomor telepon</th>
                <th scope="col">email</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->Nim }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->tempat_lahir }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->jenis_kelamin }}</td>
                <td>{{ $user->alamat}}</td>
                <td>{{ $user->programstudi }}</td>
                <td>{{ $user->nomortelpon	 }}</td>
                <td>{{ $user->email }}</td>
                

                <td>
                    <a class="btn btn-primary" href="/mahasiswa/edit/{{ $user->id }}" role="button">Edit</a>
                    <a class="btn btn-primary" href="/mahasiswa/hapus/{{ $user->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>

       <a href="/tambah" type="button" class="btn btn-dark">tambah data</a>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>