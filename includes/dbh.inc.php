<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPwd = "";
$dbName = "dummystocks";

$conn = mysqli_connect($serverName,$dbUsername,$dbPwd,$dbName);

if($conn){
    echo("success!");
}
else{
    die("Connection failed: ".mysqli_connect_error());

}