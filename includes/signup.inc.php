<?php

if(isset($_POST["sumbit"])){

    $email =$_POST["email"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'fucntions.inc.php';

    if(emptyInputSignup($email,$pwd) !== false){

      header("location:../register.php?error=emptyinput");
      exit();
    }

    if(invalidEmail($email) !== false){

      header("location:../register.php?error=invalidemail");
      exit();
    }

    createUser($conn,$email,$pwd);

  }
  else{

    header("location:../register.php");
}

