<?php
include "koneksi.php";

$no_urut = $_GET['id'];

$sql ="DELETE FROM tbl_059 WHERE no_urut=$no_urut";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "
    <script>
      alert('penghapusan data gagal, silahkan coba lagi :(');
      document.location.href='tampil_data.php';   
    </script>
    ";
}else{
    echo "
    <script>
      alert('data berhasil dihapus');
      document.location.href='tampil_data.php';   
    </script>";
}

?>