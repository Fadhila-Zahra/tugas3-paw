<?php
include "koneksi.php";

$no_urut = $_POST['no_urut'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$asal_kota = $_POST['asal_kota'];

$sql ="UPDATE tbl_059 SET
        nama = '$nama',
        no_hp = '$no_hp',
        asal_kota = '$asal_kota'
        WHERE no_urut=$no_urut";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('Data gagal diperbaharui, silahkan coba lagi :(');
      document.location.href='update_data1.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('Data berhasil diperbaharui');
      document.location.href='tampil_data.php';   
    </script>";
}

?>