    <?php
    echo "Please Wait....";
    $conn = new mysqli("localhost", "root", "", "library");
    $name = $_GET['id'];
    $sql = "SELECT * FROM books";
    $res = $conn->query($sql);
    while($row = $res->fetch_array()){
        $type = $row['type'];
        $type = json_decode($type,true);
        if($type['name'] == $name){
            $path = $row['path'];
            echo "<script>window.location.assign('../../../../".$path."')</script>";
        }
        
    }
?>