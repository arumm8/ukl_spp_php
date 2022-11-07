<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "connect.php";
    $qry_get_siswa=mysqli_query($conn,"select * from siswa where nisn = '".$_GET['nisn']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
        <form action="proses_ubah_siswa.php" method="post">
            <input type="hidden" name="nisn" value="<?=$dt_siswa['nisn']?>">
            NIS :
            <input type="text" name="nis" value="<?=$dt_siswa['nis']?>" class="form-control">
            Nama :
            <input type="text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" class="form-control">
            Alamat : 
            <textarea name="alamat" class="form-control" rows="4"><?=$dt_siswa['alamat']?></textarea>
            No.Hp :
            <input type="text" name="no_hp" value="<?=$dt_siswa['no_hp']?>" class="form-control">
            <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


