<?php
$host = 'localhost';
$db = 'mercu';
$user = 'root'; // default XAMPP
$pass = ''; // default XAMPP

$conn = mysqli_connect($host, $user, '', $db);

//Cek koneksi 
// if($conn){
//     echo 'berhasil';
// }

// Sign up
if(isset($_POST['signup'])){
    // jika tombol signup diklik

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Input ke Database
    $insert = mysqli_query($conn,"INSERT INTO user (nama,jk,email,password) values('$nama','$jk','$email','$password')");
    
    // Jika berhasil
    if($insert){
        echo '
        <script>
            alert("Pendaftaran Berhasil!");
            window.location.href="index.php";
        </script>
        ';
    } else{
        // Jika gagal
        echo '
        <script>
            alert("Pendaftaran Gagal!");
            window.location.href="signup.php";
        </script>
        ';
    }
}

// Login
if(isset($_POST['login'])){
    // jika tombol login diklik
    $email = $_POST['email'];
    $password = $_POST['password'];

    // validasi ke Database
    $cekdb = mysqli_query($conn,"SELECT * FROM user where email='$email'");
    $validasi = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordverif = $pw['password'];
    
    // Jika ada
    if($validasi>0){
        // Verifikasi Password
        if($password = $passwordverif){
            echo '
            <script>
                alert("Login Berhasil!");
                window.location.href="dashboard.html";
            </script>
            ';    
        } 

        // Jika salah password
        else{
            echo '
            <script>
                alert("Password yang anda masukan salah!");
                window.location.href="index.php";
            </script>
            ';
        }
    } else{
        // Jika salah email
        echo '
        <script>
            alert("Email yang anda masukan salah!");
            window.location.href="index.php";
        </script>
        ';
    }
}
?>