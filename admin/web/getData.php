<?php
    $conn = mysqli_connect("localhost", "root", "", "library");
    $sql_books = "select id from books";
    $sql_users = "select id from persons";
    $res_books = mysqli_query($conn,$sql_books);
    $res_users = mysqli_query($conn,$sql_users);
    $count_books;$count_users;
    while($row_users = mysqli_fetch_array($res_users)){
        $count_users++;
    }
    while($row_books = mysqli_fetch_array($res_books)){
        $count_books++;
    }
    echo $count_books,$count_users;
?>
