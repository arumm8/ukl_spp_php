<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 fw-bold" style="color: #801336;">Web SPP</span> 
        </div>
    </nav>

    <br>
    <h4 align="center" style="color: #801336;">Register Admin</h4>
    <form action="proses_tambah_admin.php" method="post">
        <input type="hidden" name="level" value="admin" class="form-control mb-2">
        <p style="margin-left:20px;">Username :</p>
        <input type="text" name="username" value="" class="form-control mb-2">
        <p style="margin-left:20px;">Password :</p>
        <input type="password" name="password" value="" class="form-control mb-2">
        <p style="margin-left:20px;">Nama :</p>
        <input type="text" name="nama_petugas" value="" class="form-control mb-2">
        <a class="nav-link active" aria-current="page" href="login_admin.php" style="color: #801336;">Back</a>
        <button class="nav-link active" aria-current="page" type="submit" style="color: #801336;"> Tambah Admin </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>






















<!-- <!DOCTYPE html> 
<html>
<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
            <h3 align="center">Register</h3>
            <form action="proses_register.php" method="post" enctype="multipart/form-data">
                NISN :
                <input type="text" name="nisn" value="" class="form-control mb-2">
                NIS :
                <input type="email" name="nis" value="" class="form-control mb-2">
                Nama :
                <input type="text" name="nama" value="" class="form-control mb-2">
                Alamat :
                <input type="text" name="alamat" value="" class="form-control mb-2">
                No.Hp :
                <input type="text" name="no_hp" value="" class="form-control mb-2">
                Password :
                <input type="password" name="password" value="" class="form-control mb-2">
                <a href="home.php" class="btn btn-primary mt-4">Back</a>
                <a href="home.php" class="btn btn-primary mt-4">Submit</a>
                <!-- <input type="submit" name="simpan" value="Submit Data" class="btn btn-primary mt-3" href="home.php"> -->
            <!-- </form>
        </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html> -->