<?php

include('config.php');

session_start();

error_reporting(0);

if(isset($_SESSION['username'])){
    header("Location: index.php");
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Upss, Email or Password is Wrong.')</script>";
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mustika Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h3>Wellcome to</h3>
                    <h1>Mustika Beauty</h1>
                    <h5>for your better solution</h5>
                    <h5>with specialist and profesional doctor</h5>
                    <hr>
                    <div>
                        <div class="text-center text-lg-start">
                            <a href="login.php" class="btn-login d-inline-flex align-items-center justify-content-center align-self-center">Find Out More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="text-center bg-transparent fixed-bottom">
                @Copyright by 21552011427 _ MUSTIKA RA _ TIF RM 21
            </footer>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>