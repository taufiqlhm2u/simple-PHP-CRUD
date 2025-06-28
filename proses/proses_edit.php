<?php
include_once "../includes/koneksi.php";

if (isset($_POST["submit"])){
  $idEvent   = $_POST["idEvent"];
  $namaEvent = htmlspecialchars($_POST["namaEvent"]);
  $lokasi    = htmlspecialchars($_POST["lokasi"]);
  $tanggal   = $_POST["tanggal"];
  $deskripsi = htmlspecialchars($_POST["deskripsi"]);
  
  $edit = mysqli_query($db, "UPDATE events SET 
  nama = '$namaEvent',
  lokasi = '$lokasi',
  tanggal = '$tanggal',
  deskripsi = '$deskripsi' WHERE id = '$idEvent'");
  
  if ($edit){
    echo "<script> 
    alert('Data berhasil diedit');
    document.location.href = '../index.php';
    </script>";
  }
}


?>