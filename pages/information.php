<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "library");

$result = $conn->query("SELECT * FROM books");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Name":"'  . $rs["id"] . '",';
  $outp .= '"City":"'   . $rs["path"]        . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo $outp;

$var = "sub,12,12,121,212";
$var1 = explode(",",$var);
for($i=0;$i<sizeof($var1);$i++){
  echo $var1[$i]."<br />";
}
print_r($var1);
$data = json_encode($var1);
echo $data;
$data1 = json_decode($data);
print_r ($data1);
?>
