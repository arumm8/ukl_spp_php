<?php
session_start();
?>
<!DOCTYPE html>
    <?php
        include "connect.php";
        $his=mysqli_query($conn, "select * from kelas a join angkatan b on b.id_angkatan=a.id_angkatan order by nama_kelas asc");
        $row = mysqli_num_rows($his);
        //  $sql=mysqli_query($conn, "select * from angkatan a  join kelas b on b.id_angkatan=a.id_angkatan");
        //  $ex=mysqli_fetch_array($sql);
        // var_dump($row);
        if($row==0){
            echo "<h3 style='color:black;text-align:center;' >  Tidak ada Data Kelas</h3>";
            echo "<a href='tambah_kelas.php' class='button-tambah2'>+Tambah Petugas</a>";
        }elseif($row >0){
    ?>
                        
    <!-- <h2>Responsive Table</h2> -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
            <th> No </th>
            <th> Nama Kelas </th>
            <th> Jurusan </th>                            
            <th> Angkatan </th>
            <th> Ubah </th>
            <th> Hapus </th>                                     
            </tr>                    
            </thead>
            <tbody>
            <?php 
            // include "connect.php";
            // $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");

            // while($query=mysqli_fetch_array($sql)){
            //   $nama_ang=$query['nama_angkatan'];
            // }
    $no=0;

    while($histori = mysqli_fetch_array($his)){
    
        $no++;
        $hapus="<td>"."<a href='hapus_kelas.php?id_kelas=".$histori_pembayaran['id_kelas']."' onclick='return confirm(\"Apakah anda yakin menghapus data ini?\")' class='button-hapus'>Hapus</a>"."</td>";
        $ubah="<td>"."<a href='ubah_kelas.php?id_kelas=".$histori_pembayaran['id_kelas']."'  class='button-ubah'>Ubah</a>"."</td>";
        // while($dt_buku=mysqli_fetch_array($sql)){
        //     $kelas=$dt_buku['nama_kelas'];
        // }
    ?>
        <tr>
        <td><?=$no?></td>
        <td><?=$histori['nama_kelas']?></td>
         <td><?=$histori['jurusan']?></td>
        <td><?=$histori['nama_angkatan'].$ubah.$hapus?></td>
        </tr>
    <?php
    }
    ?>
            </tbody>
        </table>
    </div>
    <a href="tambah_kelas.php" class="button-tambah">+ Tambah Kelas</a>
    <?php
        }
    ?>

    <script src="app.js"></script>

</html>