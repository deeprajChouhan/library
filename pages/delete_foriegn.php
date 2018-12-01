<?php
  include 'connection.php';
  echo $sql_delete = "DELETE FROM persons WHERE firstname = 'Anirudhha'";
  if($conn->query($sql_delete) === true){echo "Deleted";}
 ?>
