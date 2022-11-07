<?php
include "connect.php";
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $password= $_POST['password'];
    // $role=$_POST['role'];

    $select = mysqli_query($conn,"select * from siswa");
    $data_siswa = mysqli_fetch_array($select);
    // var_dump($data_siswa);

    if($nisn = $data_siswa['nisn']){
        echo "<script>alert('NISN tidak boleh sama');location.href='tambah_siswa.php';</script>";
    }
    elseif(empty($nisn)){
        echo "<script>alert('NISN siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } 
    elseif(empty($nis)){
        echo "<script>alert('NIS tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama_siswa)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($no_hp)){
        echo "<script>alert('No Hp tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        $insert=mysqli_query($conn,"insert into siswa (nisn, nis, nama_siswa, alamat, no_hp, password) 
        value ('".$nisn."','".$nis."','".$nama_siswa."','".$alamat."','".$no_hp."','".($password)."')")
        or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='login_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    // }
} 
?>