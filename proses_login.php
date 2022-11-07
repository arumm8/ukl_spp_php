<?php
  if($_POST){
    $nisn=$_POST['nisn'];
    $password=$_POST['password'];
    // $role = $_POST['role'];
    if(empty($nisn)){
        echo "<script>alert('NISN tidak boleh kosong');location.href='login_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script> alert('Password tidak boleh kosong');location.href='login_siswa.php';</script>";
    } else{
        include "connect.php";
            $qry_login=mysqli_query($conn,"select * from siswa where nisn = '".$nisn."' and password = '".($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nisn']=$dt_login['nisn'];
                $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
                $_SESSION['password']=$dt_login['password'];
                // $_SESSION['role']="siswa";
                $_SESSION['status_login']=true;
                header("location: home_siswa.php");
            } else {
                echo "<script>alert('NISN dan Password tidak benar');location.href='login_siswa.php';</script>";
            }
    }
}
?>  
