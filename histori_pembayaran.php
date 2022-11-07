<?php
      include "connect.php";
       $his=mysqli_query($conn, "select p.*,s.*, t.nama_petugas from pembayaran p join petugas t on t.id_petugas=p.id_petugas join siswa s on s.NISN=p.NISN  order by id_pembayaran desc");
       $row = mysqli_num_rows($his);
      // var_dump($row);
       if($row==0){
        echo "<h3 style='color:black;text-align:center;margin-top:50px;' > Belum ada data Pembayaran</h3>";
        // echo "<a href='tambah_petugas.php' class='button-tambah2'>+Tambah Petugas</a>";
      }elseif($row >0){
?>