<?php include "conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <span>
        <img src="lgsmk9.png" alt="" width="100" height="120" class="center">
        <img src="uny.png" alt="" width="100" height="120" class="center">
    </span>
        <div class="text-center">
        <h2>PENDAFTARAN MAHASISWA BARU</h2>
        <h2>UNIVERSITAS NEGERI YOGYAKARTA</h1>
        <h2>TAHUN 2023/2024</h2>
</div>
    <hr>
    
    <!-- Input Data -->

    <form action="proses_pendaftaran.php" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Asal Sekolah</label>
    <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control" placeholder="Asal Sekolah" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea id="alamat" name="alamat" rows="2" cols="30" placeholder="alamat" class="form-control" required></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Whatsapp</label>
    <input type="number" id="wa" name="wa" class="form-control" placeholder="+62" required>
  </div>
<div class="mb-3">
<label class="form-check-label" for="flexCheckIndeterminate">
    Agama
  </label>
<select name="agama" id="agama" class="form-select" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
</div>
<div class="mb-3">
  <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required />
  <label class="form-check-label" for="flexCheckIndeterminate">
    Laki-Laki
  </label>
</div>
<div class="mb-3">
<input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required />
  <label class="form-check-label" for="flexCheckIndeterminate">
    Perempuan
  </label>
</div>
<!-- Button Input -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
    