<?php

include "koneksi.php";
$no_urut = $_GET['no_urut'];
$sql ="SELECT * FROM tbl_059 WHERE no_urut=$no_urut";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query salah";
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
    <title>Form Update Data</title>
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
              <a class="nav-link" href="tambah-data.html">Tambah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn" style="background-color: white; color: #6e42c1; font-weight: bold" href="#Update">Update</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4" id="Update">
    <?php while($row = mysqli_fetch_array($hasil)) : ?>
      <form action="update_data2.php" method="post">
      <input type="hidden" name="no_urut" value="<?= $row["no_urut"]; ?>" />
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" value="<?php echo $row['nama'] ?>" class="form-control" style="background-color: #6e42c113" name="nama" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No HP</label>
          <input type="text" value="<?php echo $row['no_hp'] ?>" class="form-control" style="background-color: #6e42c113" name="no_hp" required />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Asal Kota</label>
          <input type="text" value="<?php echo $row['asal_kota'] ?>" class="form-control" style="background-color: #6e42c113" name="asal_kota" required />
        </div>
        <button type="submit" name="submit" class="btn" style="background-color: #6e42c1; color: white; font-weight: bold">Update</button>
      </form>
      <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
