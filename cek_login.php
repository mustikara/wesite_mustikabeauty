<?php 
// panggil koneksi database
include  "config.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($config, $_POST['username']);
$password = mysqli_escape_string($config, $pass['username']);

// cek username teraftar atau tidak
$cek_user = mysqli_query($config, "SELECT * FROM users WHERE username = '$username'");
$user_valid = mysqli_fetch_array($cek_user);

// uji jika username terdaftar
if($user_valid){
    if ($password == $user_valid['password']){
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['email'] = $user_valid['email'];
    }
} else{
    echo "<script>alert('login failed'); document.location='index.php'</script>";
}
?>