<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $referral = $_POST["referral"];

    if(emptyInputRegister($email,$pwd) !== FALSE){
        header("location: ../register.php?error=emptyinput");
        exit();
    }

    createUser($conn,$email,$pwd);

}
else{
    header("location: ../register.php");
    exit();
}