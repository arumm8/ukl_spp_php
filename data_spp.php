<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <?php
        include "connect.php";
        $his=mysqli_query($conn, "select * from spp join angkatan b using(id_angkatan)");
        $row = mysqli_num_rows($his);
        //  $sql=mysqli_query($conn, "select * from spp a join angkatan b using(id_angkatan)");
        //  $ex=mysqli_fetch_array($sql);
        // var_dump($row);
        if($row==0){
            echo "<h3 style='color:black;text-align:center;' >  Tidak ada Data SPP</h3>";
            echo "<a href='tambah_spp.php' class='button-tambah2'>+Tambah Data SPP</a>";
        }elseif($row >0){
    ?>
                     
<!-- <h2>Responsive Table</h2> -->
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
        <th> No </th>
        <th> Angkatan </th>
        <th> Tahun </th>                            
        <th> Nominal </th>
        <th> Ubah </th>
        <th> Hapus </th>                                     
        </tr>                    
        </thead>
        <tbody>
        <?php 
        // include "connect.php";
        // $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");
        $no=0;

        while($histori = mysqli_fetch_array($his)){
        $no++;
        $hapus="<td>"."<a href='hapus_spp.php?id_spp=".$histori['id_spp']."' onclick='return confirm(\"Apakah anda yakin menghapus data ini?\")' class='button-hapus'>Hapus</a>"."</td>";
        $ubah="<td>"."<a href='ubah_spp.php?id_spp=".$histori['id_spp']."'  class='button-ubah'>Ubah</a>"."</td>";

        // while($dt_buku=mysqli_fetch_array($sql)){
        //     $kelas=$dt_buku['nama_kelas'];
        // }
        ?>
        <tr>
        <td><?=$no?></td>
        <td><?=$histori['nama_angkatan']?></td>
        <td><?=$histori['tahun']?></td>
        <td><?=$histori['nominal'].$ubah.$hapus?></td>
        </tr>

    <?php
    }
    ?>
        </tbody>
    </table>
                     
    </div>
    <a href="tambah_spp.php" class="button-tambah">+ Tambah Data SPP</a>
    <?php
        }
    ?>

    <script src="app.js"></script>
</html>


          
          