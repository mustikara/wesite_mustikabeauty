<?php

include('config.php');

session_start();

if(!isset($_SESSION['username'])){
    header("Location: dashboard.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mustika Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #F653A6">
        <div class="container">
            <a class="navbar-brand" href="#">Mustika Beauty</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-box-arrow-right"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAvbar end -->

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <img src="img/hy.jpg" alt="mus" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4" style="color: #012970; font-weight: 500">Mustika Beauty</h1>
        <hr>
        <p class="fs-5" style="font-weight: 500">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>

    <!-- Jumbotron end -->

    <!-- about -->
    <section id="about">

        <div class="container">
            <div class="row text-center mb-3 pt-4">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row fs-5 text-center">
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque rem velit cum. Fugit ex laboriosam quia minima optio nisi asperiores.</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illum quos aliquam iusto tempora? Eius porro consequatur praesentium sint nesciunt fugiat voluptas ea quasi molestias.</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illum quos aliquam iusto tempora? Eius porro consequatur praesentium sint nesciunt fugiat voluptas ea quasi molestias.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc0cb" fill-opacity="1" d="M0,128L80,149.3C160,171,320,213,480,197.3C640,181,800,107,960,96C1120,85,1280,139,1360,165.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- About end -->

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="padding-top: 2rem">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Photodynamic Therapy</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">High Frequency </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text  text-center">Infus Booster</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/4.jpg " class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text  text-center">Skin Tag Remover</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text  text-center">Facial Brightening</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L80,165.3C160,139,320,85,480,96C640,107,800,181,960,197.3C1120,213,1280,171,1360,149.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- service end -->

    <footer class="text-center bg-transparent">
        @Copyright by 21552011427 _ MUSTIKA RA _ TIF RM 21
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>