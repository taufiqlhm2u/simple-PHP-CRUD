<?php
include_once "../includes/koneksi.php";

if (isset($_POST["submit"])){
  $namaEvent = htmlspecialchars($_POST["namaEvent"]);
  $lokasi    = htmlspecialchars($_POST["lokasi"]);
  $tanggal   = $_POST["tanggal"];
  $deskripsi = htmlspecialchars($_POST["deskripsi"]);
  
  $insert = mysqli_query($db, "INSERT INTO events VALUES(NULL, '$namaEvent', '$lokasi', '$tanggal', '$deskripsi')");
  
  if ($insert){
    echo "<script> 
    alert('Data berhasil ditambahkan');
    document.location.href = '../index.php';
    </script>";
  }
}


?>