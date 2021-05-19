<?php

if(isset($_POST["submit"])){

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $email = $_POST["email"];
    $pwd = $_POST["password"];

    if(emptyInputLogin($email,$pwd) !== FALSE){
        header("location: ../login.php?error=emptyinput");
        exit();
    }


    loginUser($conn,$email,$pwd);

}
else{
    header("location: ../login.php");
    exit();
}