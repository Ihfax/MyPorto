<?php 
require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSignUp1.css">
    <title>Sign Up | Mercu</title>
</head>
<body>
    <div class="container">
        <div class="signup">
            <form method="post">
                <h1>Sign Up</h1>    
                <hr>
                <p>Ihsan Fauzi | SMK Telkom Jakarta</p>
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" placeholder="Nama" required>
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" placeholder="Pilih Jenis kelamin" require>
                    <option value="laki - laki" disabbled selected>laki - laki </option>
                    <option value="perempuan" disabbled selected>Perempuan</option>                    
                </select>
                <label for="">Email</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" require>
                <label for="Password">Password</label>
                <input type="" name="password" id="password" placeholder="password" require>
                <button type="submit" name="signup">Submit</button>
                <p>
                    Sudah Punya Akun? <a href="login.php">Login!</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>