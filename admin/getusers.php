<?php
session_start();
class users{
    
    function getInfo($email,$password){
        $conn =new mysqli("localhost","root","","library");
        $sql_get_data = "select * from persons where email = '$email' and password = '$password'";
        $result = $conn->query($sql_get_data);
        $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] =  $row['firstname'];;
            if($email == $row['email'] && $password == $row['password']) 
            return 1;
            else 0;
        
    }
    function checkUser($name,$email){
        $conn =new mysqli("localhost","root","","library");
        $sql_get_data = "select * from persons where email = '$email'";
        $result = $conn->query($sql_get_data);
        $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            if($email == $row['email'] && $email == $row['email']) return 1;
            else 0;
    }
}
?>