<?php
if($_POST){
    $username=$_POST['username'];
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('Level siswa tidak boleh kosong');location.href='tambah_petugas.php';</script>";
    } else {
        include "connect.php";
            $update=mysqli_query($conn,"update petugas set username='".$username."', nama_petugas='".$nama_petugas."',level='".$level."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
        }    
    } 
?>
