<?php
include_once "../includes/koneksi.php";

if (!isset($_GET["idEvent"])){
  header("Location: ../index.php");
  exit;
}
$id = $_GET["idEvent"];

$hapus = mysqli_query($db, "DELETE FROM events WHERE id = '$id' ");

if ($hapus){
  echo "<script> 
    alert('Data berhasil dihapus');
    document.location.href = '../index.php';
    </script>";
}
?>