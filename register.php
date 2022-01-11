<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> CipherX | Crypto for Beginners </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/register-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "registerpage">
            <header class= "header">
                <a href = "index.php" class = "header-dummystocks"> CIPHERX </a>
            </header>
            <div class="wrapper">
            <div class="register-form">
                <div data-bn-type="text" class = "register-title">Create a free account</div>
                <div data-bn-type="text" class = "register-subtitle">Welcome to CipherX</div>
                <form action="includes/signup.inc.php" method="post">
                <div class="form">
                    <div class = "form-group-email">
                        <label class="label-email">Email</label>
                        <input type="text" name = "email" class="form-input" > 
                    </div>
                    <div class = "form-group-pwd">
                        <label class="label-password">Password</label>
                        <input type="password"  class="form-input" name="password">
                    </div>
                
                    <a href="" class="createacc-box">
                    <button class="btn-createaccount" type="submit" name="submit">Create Account</button>
                    </a> 
                    </div>
                </form>
                
                <?php //to display the error message when filling out forms

                    if(isset($_GET["error"])){

                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all fields!</p>";
                        }

                        else if($_GET["error"] == "emailexists"){
                            echo "<p>Email is already registered!</p>";
                        }
                        else if($_GET["error"] == "stmtfailed"){
                            echo "<p>Something went wrong, try again!</p>";
                        }
                        else if($_GET["error"] == "invalidemail"){
                            echo "<p>Enter a valid email!</p>";
                        }
                        else if($_GET["error"] == "none"){
                            echo "<p>Account created!</p>";
                        }
                    }
                ?>
                </div>
            </div>
           
            
        </div>
        
 
    </body>
</html>