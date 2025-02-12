<?php 
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin1.css">
    <title>Login | Mercubuana</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1>Login</h1>
                <hr>
                <p>Ihsan Fauzi | SMK Telkom Jakarta</p>
                <label for="">Email</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="" name="password" id="password" placeholder="password">
                <i data-feather="eye-off" class="show-hide"></i>
                <button type="submit" name="login">Login</button>
                <p>
                    <a href="signup.php">Sign Up!</a>   
                </p>
            </form>
        </div>
    </div>
</body>
</html>