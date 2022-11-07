<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="home.css">
    <tittle></tittle>
</head>
<body>
    
<!-- Navbar -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fw-bold" style="color: #801336;">Web SPP</span> 
        </div>
    </nav>

<!-- Header -->
<div id="header" class="container-fluid position-relative">
        <!-- skin gelap -->
        <div class="row w-100 h-100 bg-black position-absolute opacity-75">
        </div>
        <!-- end skin gelap -->
        <div class="row w-100 justify-content-center align-items-center h-100 position-absolute">
            <div class="col-lg-8">
                <h1 class="text-white text-center text-uppercase">
                    Selamat Datang
                </h1>
                <h5 class="text-white text-center">
                    di Web Pembayaran SPP
                </h5>
                <h6 class="text-white text-center">
                    Login sebagai
                </h6> 
                <div class="text-center text-white-50">
                    <br>
                    <form action="proses_login.php" method="post">
                        <a class="nav-link active" aria-current="page" href="login_siswa.php">Siswa</a>
                        <a class="nav-link active" aria-current="page" href="login_petugas.php">Petugas</a>
                        <a class="nav-link active" aria-current="page" href="login_admin.php">Admin</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row" style="margin-top:50px;">
        <div class="col-md">
            <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
                <form action="proses_login.php" method="post">
                    <h3 align="center">LOGIN</h3>
                    Login sebagai
                        <a class="nav-link active" aria-current="page" href="login_siswa.php">Siswa</a>
                        <a class="nav-link active" aria-current="page" href="login_petugas.php">Petugas</a>
                        <a class="nav-link active" aria-current="page" href="login_admin.php">Admin</a>
                </form>
            </div>
            <div class="col-md"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div> -->

<?php
    include"footer.php";
?>
