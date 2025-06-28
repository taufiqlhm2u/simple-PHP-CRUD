<?php 

try {
  $db = mysqli_connect("localhost", "root", "", "event");
} catch (Exception $e) {
  echo "<script>
  alert('maaf database tidak bisa diakses');
  </script>" . $e->getMessage();
  die();
}


?>