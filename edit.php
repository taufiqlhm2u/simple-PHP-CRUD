<?php 
include_once "includes/koneksi.php";

if (!isset($_GET["idEvent"])){
  header("Location: index.php");
  exit;
}
$idEvent = $_GET["idEvent"];
$query = mysqli_query($db, "SELECT * FROM events WHERE id = '$idEvent' ");
$data  = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link rel="stylesheet" href="css/style_form.css">
<link rel="stylesheet" href="css/head_foot.css">
  </head>
<body>
  <?php include_once "includes/header.php" ?>
  <main class="container">
    <h1>Edit data</h1>
<form action="proses/proses_edit.php" method="post">
  <input type="hidden" name="idEvent" value="<?= $data['id']?>">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingNama" placeholder="nama" name="namaEvent" value="<?= $data['nama']?>" required>
  <label for="floatingLokasi">Nama event</label>
</div>
<div class="form-floating">
  <input type="text" class="form-control" id="floatingLokasi" name="lokasi" placeholder="lokasi" value="<?= $data['lokasi']?>" required>
  <label for="floatingLokasi">Lokasi</label>
</div>
<div class="col-md-4">
    <label for="inputState" class="form-label">Tanggal</label>
    <input type="date" class="form-select"  name="tanggal" value="<?= $data['tanggal']?>" placeholder="00-00-0000">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="deskripsi" style="height: 100px"><?= $data['deskripsi']?></textarea>
  <label for="floatingTextarea2">Deskripsi</label>
</div>
<div class="btn-tengah">
<button type="submit" name="submit" class="btn btn-primary">edit</button>
</div>
  </form>
  </main>
    <?php include_once "includes/footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>