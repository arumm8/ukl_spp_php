<?php
include "connect.php";
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama_siswa=$_POST['nama_siswa'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    if(empty($nisn)){
        echo "<script>alert('NISN tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nis)){
        echo "<script>alert('NIS tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($nama_siswa)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($no_hp)){
        echo "<script>alert('No Hp tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
            $update=mysqli_query($conn,"update siswa set nis='".$nis."',nama_siswa='".$nama_siswa."',
            alamat='".$alamat."', no_hp='".$no_hp."' where nisn='".$nisn."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        }    
    } 
?>
