<?php 
if (!isset($_GET["idEvent"])){
  header("Location: index.php");
  exit;
}
include_once "includes/koneksi.php";
$idEvent = $_GET["idEvent"];
$query = mysqli_query($db, "SELECT * FROM events WHERE id = '$idEvent' ");
$data  = mysqli_fetch_assoc($query);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>details</title>
        <link rel="stylesheet" href="css/head_foot.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/style_details.css" type="text/css" media="all" />
    </head>
    <body>
        <?php include_once "includes/header.php" ?>
        <main>
            <table>
                <thead>
                    <tr>
                        <th colspan="2"><?= $data["nama"] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>lokasi : </th>
                        <td><?= $data["lokasi"] ?></td>
                    </tr>
                    <tr>
                        <th>waktu : </th>
                        <td><?= $data["tanggal"] ?></td>
                    </tr>
                    <tr>
                        <th>deskripsi acara : </th>
                        <td>
                         <?= $data["deskripsi"] ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
              <?php include_once "includes/footer.php" ?>
    </body>
</html>