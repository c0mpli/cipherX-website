<!DOCTYPE html>
<html lang = "en">
    <head>
        <title> DummyStocks | Stocks for Beginners </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/register-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class = "registerpage">
            <header class= "header">
                <a href = "index.php" class = "header-dummystocks"> DUMMYSTOCKS </a>
            </header>
            <div class="wrapper">
            <div class="register-form">
                <div data-bn-type="text" class = "register-title">Create a free account</div>
                <div data-bn-type="text" class = "register-subtitle">Welcome to Dummystocks</div>
                <form class="form" action="includes/singup.inc.php" method="post">
                    <input type="text" name="email" placeholder="Email"> <br>   
                    <input type="password" name="password" placeholder="Password"><br> 
                    <input type="text" name="referral" placeholder="Referral ID"><br>
                    <a href="" class="createacc-box">
                    <button class="btn-createaccount" data-bn-type="button">Create Account</button>
                    </a> 
                </form>
            </div>
            </div>
            
        </div>

    </body>
</html>