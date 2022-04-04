<?php

include "koneksi.php";


if(isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $asal_kota = $_POST['asal_kota'];

$sql = "INSERT INTO tbl_059 VALUE('','$nama','$no_hp','$asal_kota')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('penambahan data gagal, silahkan dicoba lagi :(');
      document.location.href='tambah_data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('data telah berhasil ditambahkan');
      document.location.href='tampil_data.php';   
    </script>";}
}
?>

<!-- bootstrap -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Form Tambah Data</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #6f42c1">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil-data.html">Tampil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn" style="background-color: white; color: #6e42c1; font-weight: bold" href="#About">Tambah</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4" id="About">
    <h2 style="color: #6e42c1">Form Tambah Data</h2>
      <br />
    <form action="" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" style="background-color: #6e42c113" name="nama" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No HP</label>
          <input type="text" class="form-control" style="background-color: #6e42c113" name="no_hp" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
          <input type="text" class="form-control" style="background-color: #6e42c113" name="asal_kota" required />
        </div>
        <button type="submit" name="submit" class="btn" style="background-color: #6e42c1; color: white; font-weight: bold">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

