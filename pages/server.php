<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "library");

$result = $conn->query("SELECT * FROM books");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {

    $data_raw = $rs['type'];
    if ($outp != "") {$outp .= ",";}
    $outp .= $data_raw;
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo $outp;
?>
