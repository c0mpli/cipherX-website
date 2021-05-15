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
                <div data-bn-type="text" class = "register-title">Log In</div>
                <div data-bn-type="text" class = "register-subtitle">Please check that you are visiting the correct URL</div>
                <form class="form" action="includes/login.inc.php" method="post">
                    <input type="text" name="email" placeholder="Email"> <br>   
                    <input type="password" name="password" placeholder="Password"><br> 
                    <a href="" class="createacc-box">
                    <button class="btn-createaccount" data-bn-type="button">Log In</button>
                    </a> 
                </form>
            </div>
            </div>
            
        </div>

    </body>
</html>