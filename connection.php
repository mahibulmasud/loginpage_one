<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logregone";

$conector = mysqli_connect($servername,$username,$password,$dbname);

if($conector){
    echo "";
}else{
    die("Connection failed because".mysqli_connect_error());
}


// // sql to create table
// $sql = "CREATE TABLE loginfo (
//     username VARCHAR(30) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     password VARCHAR(30)
//     )";
    
//     if ($conector->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conector->error;
//     }
?>