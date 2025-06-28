<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>daftar event</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header>
    <h1>evently.oi</h1>
    <a href="tambah.php"><button>Tambah +</button></a>
  </header>
  <main>
      <h2>data event</h2>
      <table>
        <thead>
          <tr>
            <th>no</th>
            <th>event</th>
            <th>lokasi</th>
            <th>tanggal</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include_once "includes/koneksi.php";
          
          $query = mysqli_query($db, "SELECT * FROM events");
          $a = 1;
          while ($event = mysqli_fetch_assoc($query)) :
          ?>
          <tr>
            <td><?= $a ?></td>
            <td>
              <a href="details.php?idEvent=<?=$event['id']?>"><?= $event["nama"]?></a>
            </td>
            <td><?= $event["lokasi"]?></td>
            <td><?= $event["tanggal"]?></td>
            <td>
              <a href="edit.php?idEvent=<?=$event['id']?>"><button id="edit">edit</button></a>
              <a href="proses/hapus.php?idEvent=<?=$event['id']?>" onclick="return confirm('apakah kamu yakin');"><button id="hapus">hapus</button></a>
            </td>
          </tr>
          <?php 
          $a++;
          endwhile; ?>
        </tbody>
      </table>
  </main>
<footer>
    <p>Disclaimer: Informasi pada situs web ini hanya untuk tujuan informasi umum.</p>
    <p>&copy; 2025 taufqlhm2u</p>
</footer>
<script src="js/script_index.js"> </script>
</body>
</html>