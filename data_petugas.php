<?php
session_start();
?>
<!DOCTYPE html>
    <?php
        include "connect.php";
        $his=mysqli_query($conn, "select * from petugas where level like 'petugas' order by nama_petugas asc limit 20");
        $row = mysqli_num_rows($his);
        // var_dump($row);
        if($row==0){
        echo "<h3 style='color:black;text-align:center;' >  Tidak ada Data Petugas</h3>";
        echo "<a href='tambah_petugas.php' class='button-tambah2'>+Tambah Data</a>";
        }elseif($row >0){
    ?>
                     
    <!-- <h2>Responsive Table</h2> -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
            <th> No </th>
            <th> Username </th>
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
                $hapus="<td>"."<a href='hapus_petugas.php?id_petugas=".$histori_pembayaran['id_petugas']."' onclick='return confirm(\"Apakah anda yakin menghapus data ini?\")' class='button-hapus'>Hapus</a>"."</td>";
                $ubah="<td>"."<a href='ubah_petugas.php?id_petugas=".$histori_pembayaran['id_petugas']."'  class='button-ubah'>Ubah</a>"."</td>";

                // while($dt_buku=mysqli_fetch_array($sql)){
                //     $kelas=$dt_buku['nama_kelas'];
                // }
            ?>
                <tr>
                <td><?=$no?></td>
                <td><?=$histori['username']?></td>
                <td><?=$histori['nama_petugas'].$ubah.$hapus?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
    </table>
    </div>
    <a href="tambah_angkatan.php" class="button-tambah4">+ Tambah Angkatan</a>
    <?php
        }
    ?>

    <script src="app.js"></script>
</html>