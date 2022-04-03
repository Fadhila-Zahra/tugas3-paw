<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "zahra";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
} 

?>
