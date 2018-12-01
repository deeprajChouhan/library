    <?php
        include 'connection.php';
        $data = json_decode(file_get_contents("display.php"));
          $name = mysqli_real_escape_string($conn,$data['bname']);
          $sem = mysqli_real_escape_string($conn,$data['bsem']);
          $stream = mysqli_real_escape_string($conn,$data['bstream']);
          $input_data = '{"name":"'.$name.'","sem":"'.$sem.'","stream":"'.$stream.'"}';
          $query = "update books set type = '$input_data' where id = 9";
          if($conn->query($query) === TRUE){echo "Update successfuly";}
      ?>
