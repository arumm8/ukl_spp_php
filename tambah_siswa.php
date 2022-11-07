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
    <h4 align="center" style="color: #801336;">Register Siswa</h4>
    <form action="proses_tambah_siswa.php" method="post">
        <p style="margin-left:20px;">NISN :</p>
        <input type="text" name="nisn" value="" class="form-control mb-2">
        <p style="margin-left:20px;">NIS :</p>
        <input type="text" name="nis" value="" class="form-control mb-2">
        <p style="margin-left:20px;">Nama :</p>
        <input type="text" name="nama_siswa" value="" class="form-control mb-2">
        <p style="margin-left:20px;">Alamat :</p>
        <input type="text" name="alamat" value="" class="form-control mb-2"</input>
        <p style="margin-left:20px;">No HP :</p>
        <input type="text" name="no_hp" value="" class="form-control mb-2">
        <p style="margin-left:20px;">Password :</p>
        <input type="password" name="password" value="" class="form-control mb-2">
        <a class="nav-link active" aria-current="page" href="login_siswa.php" style="color: #801336;">Back</a>
        <button class="nav-link active" aria-current="page" type="submit" style="color: #801336;"> Tambah Siswa </button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>