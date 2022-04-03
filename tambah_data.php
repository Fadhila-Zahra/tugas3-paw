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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masukkan data</title>
    <style>
      table {
        border-collapse: collapse;
      }
      .form-input {
        width: 250px;
        height: 20px;
        font-size: 13px;
      }
      .label {
        font-size: 20px;
        text-align: center;
      }
      button {
        width: 80px;
        height: 30px;
        font-size: 14px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <center>
      <h1><strong>Masukkan Data Siswa</strong></h1>
      <table width="410" border="0" cellpadding="10">
        <form action="" method="post">
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">Nama</td>
            <td><input type="text" name="nama" class="form-input" required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">No Hp </td>
            <td><input type="text" name="no_hp" class="form-input" required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">Kota Asal </td>
            <td><input type="text" name="asal_kota" class="form-input" required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td colspan="2" class="label" height="40px" style="text-align: right">
              <button type="submit" name="submit">Kirim</button>
            </td>
          </tr>
        </form>
      </table>
    </center>
  </body>
</html>
