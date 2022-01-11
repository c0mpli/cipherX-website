<?php

if(isset($_POST["submit"])){

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $referral = $_POST["referral"];

    if(emptyInputRegister($email,$pwd) !== FALSE){
        header("location: ../register.php?error=emptyinput");
        exit();
    }

    if(emailExists($conn,$email) !== FALSE){
        header("location: ../register.php?error=emailexists");
        exit();
    }
    if(invalidEmail($email) !== FALSE){
        header("location: ../register.php?error=invalidemail");
        exit();
    }


    createUser($conn,$email,$pwd);

}
else{
    header("location: ../register.php");
    exit();
}