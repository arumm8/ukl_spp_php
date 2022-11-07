<?php
if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];

    if(empty($username)){
        echo "<script>alert('Username admin tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($nama_petugas)){
        echo "<script>alert('Nama petugas tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('Level tidak boleh kosong');location.href='tambah_admin.php';</script>";
    }  else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into petugas (id_petugas, username, password, nama_petugas, level) value ('".$id_petugas."','".$username."','".md5($password)."','".$nama_petugas."','".$level."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan admin');location.href='login_admin.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan admin');location.href='tambah_admin';</script>";
        }
    }
}
?>