<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "register";

$connect = mysqli_connect("$host", "$user", "$pass", "$dbName");
if(!$connect){
    // echo "Yes";
    echo die(mysqli_connect_error());
}

?>