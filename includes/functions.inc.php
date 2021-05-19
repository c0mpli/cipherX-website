<?php

function emptyInputRegister($email,$pwd){
    $result = FALSE;

    if(empty($email) || empty($pwd)){
        $result = TRUE;
    }
    else{
        $result = FALSE;
    }
   return $result;

}

function  createUser($conn,$email,$pwd){
    $sql = "INSERT INTO users (usersEmail,usersPwd) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ss",$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();

}