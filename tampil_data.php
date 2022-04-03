<?php
include "koneksi.php";


$sql="SELECT * FROM tbl_059";
$hasil = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menampilkan data</title>
    <style>
      table {
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 2px solid black;
      }
    </style>
  </head>
  <body>
    <center>
      <h1><strong>Tabel</strong></h1>
      <br />
      <table width="1000" cellpadding="10">
        <tr style="background-color: aqua; font-size: 18px">
          <th width="200px"><center>No Urut</center></th>
          <th width="200px"><center>Nama</center></th>
          <th width="200px"><center>No Hp</center></th>
          <th width="200px"><center>Asal Kota</center></th>
          <th width="200x"><center>Aksi</center></th>
        </tr>
        <?php while($row = mysqli_fetch_array($hasil)) : ?>
        <tr style="text-align: center">
          <td> <?= $row["no_urut"]; ?> </td>
          <td> <?= $row["nama"]; ?> </td>
          <td> <?= $row["no_hp"]; ?> </td>
          <td> <?= $row["asal_kota"]; ?> </td>
          <td><a href="update_data1.php?no_urut=<?=$row['no_urut']?>">Perbarui</a> | <a href="hapus_data.php?id=<?=$row['no_urut']?>">Hapus</a></td>
        </tr>
        <?php endwhile; ?>
      </table>
    </center>
  </body>
</html>
