<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "library");
$id = $_GET['id'];
$outp = "";
if($id == 0){
$result = $conn->query("SELECT * FROM books");
while($rs = $result->fetch_assoc()) {
    $data = json_decode($rs["type"],TRUE);
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'.$rs["id"] .'",';
    $outp .= '"path":"'.$rs["path"].'",';
    $outp .= '"name":"'.$data["name"].'",';
    $outp .= '"stream":"'.$data["stream"].'",';
    $outp .= '"sem":"'.$data["sem"].'"}';
}
}
else if($id == 1){
    $result = $conn->query("SELECT * FROM persons");
    while($res = $result->fetch_array()){
        $fname = $res['firstname'];$email = $res['email'];
        $password = $res['password'];$mobile = $res['mobile'];
        if ($outp != "") {$outp .= ",";}
        $outp .= '{"fname":"'.$fname.'",';
        $outp .= '"email":"'.$email.'","password":"'.$password.'",';
        $outp .= '"mobile":"'.$mobile.'"}';
    }
}
$outp ='{"records":['.$outp.']}'; 
$conn->close();

echo($outp);
?>
