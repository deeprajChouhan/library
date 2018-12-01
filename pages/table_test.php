<?php
include 'connection.php';
echo $sql = "CREATE TABLE orders(
    OrderID int NOT NULL,
    Ordernumber int NOT NULL,
    PersonID int,
    FOREIGN KEY (PersonID) REFERENCES persons(PersonID) ON DELETE CASCADE,
    PRIMARY KEY(OrderID)
)";
if(mysqli_query($conn,$sql)){
    echo "Table Created!";
}else{
    echo "Not Inserted";
}
?>
