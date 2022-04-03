<?php

include "koneksi.php";
$no_urut = $_GET['no_urut'];
$sql ="SELECT * FROM tbl_059 WHERE no_urut=$no_urut";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query salah";
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
      <?php while($row = mysqli_fetch_array($hasil)) : ?>

        <form action="update_data2.php" method="post">
            <input type="hidden" name="no_urut" class="form-input" value="<?php echo $row['no_urut'] ?>" required />
          </tr>
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">Nama</td>
            <td><input type="text" name="nama" class="form-input" value="<?php echo $row['nama'] ?>" required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">No Hp</td>
            <td><input type="text" name="no_hp" class="form-input" value="<?php echo $row['no_hp'] ?>" required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td class="label" style="text-align: left">Asal Kota</td>
            <td><input type="text" name="asal_kota" class="form-input" value="<?php echo $row['asal_kota'] ?>"required /></td>
          </tr>
          <tr style="background-color: aqua">
            <td colspan="2" class="label" height="40px" style="text-align: right">
              <button type="submit" name="submit">Send</button>
            </td>
          </tr>
        </form>
        <?php endwhile; ?>
      </table>
    </center>
  </body>
</html>