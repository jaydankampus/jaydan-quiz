<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MAHASISWA</title>
  </head>
<body>
  <h2>Edit Data Mahasiswa</h2>
  <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
    @csrf

    <div class="col-md-12">
        <label for="Nim" class="form-label">nim</label>
        <input type="text" class="form-control" id="Nim" name="Nim" value="{{ $mahasiswa->Nim }}"> 
    </div> 

    <div class="col-md-12">
        <label for="nama" class="form-label">nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
    </div> 

      <div class="col-md-12">
        <label for="tempat_lahir" class="form-label">tempat lahir</label> 
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}">
    </div> 

     <div class="col-md-12">
        <label for="tanggal_lahir" class="form-label">tanggal lahir</label> 
        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
    </div> 

     <div class="col-md-12">
        <label for="jenis_kelamin" class="form-label">jenis kelamin"</label> 
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"" value="{{ $mahasiswa->jenis_kelamin }}">
    </div>

     <div class="col-md-12">
        <label for="alamat" class="form-label">alamat</label></label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $mahasiswa->alamat }}">
    </div>

    <div class="col-md-12">
        <label for="programstudi" class="form-label">program studi</label>
        <input type="text" class="form-control" id="programstudi" name="programstudi" value="{{ $mahasiswa->programstudi }}">
    </div>
   
    <div class="col-md-12">
        <label for="nomortelpon" class="form-label">nomor  telpon</label>
        <input type="text" class="form-control" id="nomortelpon" name="nomortelpon" value="{{ $mahasiswa->nomortelpon }}">
    </div>
    <div class="col-md-12">
        <label for="email" class="form-label">email</label> 
        <input type="text" class="form-control" id="email" name="email" value="{{ $mahasiswa->email}}">
    </div> 
 
      
       
    
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
    </div>
  </form>
</body>
</html>