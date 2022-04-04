<?php
include "koneksi.php";


$sql="SELECT * FROM tbl_059";
$hasil = mysqli_query($koneksi,$sql);
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
    <title>Tabel Data</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #6f42c1">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active btn" aria-current="page" style="background-color: white; color: #6e42c1; font-weight: bold" href="#Home">Tampil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah_data.php">Tambah</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4" id="Home">
      <h2 style="color: #6e42c1">Tabel Tampil Data</h2>
      <br />
      <table class="table table-striped table-bordered border-white text-center text-white" style="width: 100%; background-color: #6e42c1">
        <thead>
          <tr>
            <th scope="col" width="20%">No Ururt</th>
            <th scope="col" width="20%">Nama</th>
            <th scope="col" width="20%">No HP</th>
            <th scope="col" width="20%">Asal Kota</th>
            <th scope="col" width="20%">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
          <tr>
            <td class="text-white"><?= $row["no_urut"]; ?></td>
            <td class="text-white"><?= $row["nama"]; ?></td>
            <td class="text-white"><?= $row["no_hp"]; ?></td>
            <td class="text-white"><?= $row["asal_kota"]; ?></td>
            <td scope="row">
              <a href="hapus_data.php?id=<?=$row['no_urut']?>"><button type="button" class="btn btn-danger" style="border: 1px solid white; font-weight: bold">Hapus</button></a>
              <a href="update_data1.php?no_urut=<?=$row['no_urut']?>"><button type="button" class="btn btn-success" style="border: 1px solid white; font-weight: bold">Perbarui</button></a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
