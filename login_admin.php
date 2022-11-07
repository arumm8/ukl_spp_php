<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head> 

<body style="background-color: #801336;">

    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_login_petugas.php" method="post">
          <h3 align="center" style="color: #801336;">LOGIN</h3> <hr><br>
          <p style="margin-left:20px;">Username :</p>
          <input type="text" name="username" value="" class="form-control">
          <p style="margin-left:20px;">Password :</p>
          <input type="password" name="password" class="form-control">
          <center><a class="nav-link active" aria-current="page" href="home.php" style="color: #801336;">Back</a><center>
          <center> <button class="nav-link active" aria-current="page" type="submit" style="color: #801336;">Login</button></center>
          <center><h6>Belum mendaftar? <a href="tambah_admin.php" style="color: #801336;">Daftar</a></h6></center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>