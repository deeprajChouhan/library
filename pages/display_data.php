<?php
  include 'connection.php';
  $sql_display = "SELECT * FROM books";
  $res_display = mysqli_query($conn,$sql_display);
  while($row_display = mysqli_fetch_array($res_display)){
    $data = $row_display['type'];
    $array = json_decode($data,true);
    echo $array['sem'];
  }
 ?>
