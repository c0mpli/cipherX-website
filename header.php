<?php
    session_start();
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> DummyStocks | Stocks for Beginners </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "homepage">
            <header class= "header">
                
                <?php
                
                    if(isset($_SESSION["usersEmail"])){
                        echo "<a href = 'homepage.php' class = 'header-dummystocks'> DUMMYSTOCKS </a>";
                        echo "<a href = 'profile.php' class = 'header-login'>Profile</a>";
                        echo "<a href = 'wallet.php' class = 'header-download'>Wallet</a>";
                        echo "<a href = 'includes/logout.inc.php' class= 'header-register'>";
                        echo "<button data-bn-type = 'button' class='btn-register'> Logout </button>";
                        echo "</a>";

                    }

                    else{
                        echo "<a href = 'index.php' class = 'header-dummystocks'> DUMMYSTOCKS </a>";
                        echo "<a href = 'login.php' class = 'header-login'> Log In </a>";
                        echo "<a class = 'header-download'>Download</a>";
                        echo "<a href = 'register.php' class= 'header-register'>";
                        echo "<button data-bn-type = 'button' class='btn-register'> Register </button>";
                        echo "</a>"; 
                    }

                ?>
                
                <a href = "help.php" class = "header-help">Help</a>
            </header>