<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> CipherX | Crypto for Beginners </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/login-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "registerpage">
            <header class= "header">
                <a href = "index.php" class = "header-dummystocks"> CIPHERX </a>
            </header>
            <div class="wrapper">
            <div class="register-form">
                <div data-bn-type="text" class = "register-title">Log In</div>
                <form action="includes/login.inc.php" method="post">
                <div class="form">
                    <div class = "form-group">
                        <label class="label-email">Email</label>
                        <input type="text" class="form-input" name="email"> 
                    </div>
                    <div class = "form-group-pwd">
                        <label class="label-password">Password</label>
                        <input type="password" class="form-input" name="password">
                    </div>
                    
                
                    <a href="" class="createacc-box">
                    <button class="btn-createaccount" data-bn-type="button" type ="sumbit" name="submit">Log In</button>
                    </a> 
                    </div>
                </form>
                <?php //to display the error message when filling out forms

                    if(isset($_GET["error"])){

                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }

                        else if($_GET["error"] == "incorrectdetails"){
                            echo "<p>Incorrect Login details!</p>";
                        }
                        
                    }
                ?>
            </div>
            </div>
            
        </div>

    </body>
</html>