<?php
header("Access-Control-Allow-Origin: * ");
header("Content-Type: application/json;charset: UTF-8");
$id = $_GET['id'];
$conn = new mysqli("localhost", "root", "", "library");
$sql_select_book = "SELECT * FROM books";
$res_select_book = $conn->query($sql_select_book);
$names = [];$sems = [];$streams = [];
$outp = "";
$count = 3;
while($row = $res_select_book->fetch_array()){
  $type = $row['type'];
  $type = json_decode($type,true);
  $path = $row['path'];
  $name = $type['name'];
  $sem = $type['sem'];
  $stream = $type['stream'];
  $bookid = $type['id'];
  if($stream == "IT" && $id == "IT" && $count != 0){
    $count--;
    if($outp != ""){$outp .= ",";}
    $outp .= '{"name":"'.$name.'","id":"'.$bookid.'","sem":"'.$sem.'","stream":"'.$stream.'"}';
  }
  else if($stream == "CSE" && $id == "CSE" && $count!=0){
    $count--;
    if($outp != ""){$outp .= ",";}
    $outp .= '{"name":"'.$name.'","id":"'.$bookid.'","sem":"'.$sem.'","stream":"'.$stream.'"}';
  }
  
  else if($stream == "ETC" && $id == "ETC" && $count!=0){
    $count--;
    if($outp != ""){$outp .= ",";}
    $outp .= '{"name":"'.$name.'","id":"'.$bookid.'","sem":"'.$sem.'","stream":"'.$stream.'"}';
  }
  
  else if($stream == "MECH" && $id == "MECH" && $count!=0){
    $count--;
    if($outp != ""){$outp .= ",";}
    $outp .= '{"name":"'.$name.'","id":"'.$bookid.'","sem":"'.$sem.'","stream":"'.$stream.'"}';
  }
}
$outp = '{"records":['.$outp.']}';
echo $outp;
?>
