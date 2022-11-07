<?php
    session_start();
    include"header_siswa.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <tittle></tittle>
</head>
<body>
    <h2>Histori Pembayaran <?=$_SESSION['nama_siswa']?></h2>
    <div class="row" style="margin-top:50px;">
        <div class="col-md">
            <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            </div>
            <div class="col-md"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>

<?php 
    include 'connect.php';
   session_start();
    if($_GET['id_pembayaran']){
    $id = $_GET['id_pembayaran'];
    $nisn = $_GET['nisn'];
    $id_pet=$_SESSION['id_petugas'];
     
    $qry=mysqli_query($conn,"select * from petugas where username = '".$_SESSION['username']."'");
    $dt_admin=mysqli_fetch_array($qry);
    $id_petugas = $dt_admin['id_petugas'];
    $tgl_bayar = date('Y-m-d');

    // $bayar = mysqli_query($conn ,"UPDATE pembayaran SET 
    //         tgl_bayar = '$tgl_bayar',
    //         keterangan = 'Lunas',
    //         id_petugas = '$id_pet' 
    //         WHERE id_pembayaran = '$id'");

    if($bayar){
        header('location: home_admin.php?cari='.$nisn.'');
    }else{
        echo "
			<script>
			alert('gagal')
			</script>
			";
    }

?>