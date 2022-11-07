<?php
    session_start();
    include"header_petugas.php";
    //$id=$_SESSION['id_petugas'];
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <tittle></tittle>
</head>
<body>
    <h2>Histori Pembayaran</h2>
    <div class="row" style="margin-top:50px;">
        <div class="col-md">
            <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            </div>
            <div class="col-md"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>

    <?php
        include "connect.php";
        $his=mysqli_query($conn, "select p.* from pembayaran p join petugas t on t.id_petugas=p.id_petugas join siswa s on s.nisn=p.nisn  where p.id_petugas=$id order by id_pembayaran desc");
        $row = mysqli_num_rows($his);
        // var_dump($row);
        if($row==0){
        echo "<h3 style='color:black;text-align:center;margin-top:50px;' > Belum ada data Pembayaran yang anda lakukan</h3>";
        // echo "<a href='tambah_petugas.php' class='button-tambah2'>+Tambah Petugas</a>";
        }elseif($row >0){
    ?>
                     
    <!-- <h2>Pembayaran yang anda lakukan</h2> -->
    <div class="table-wrapper">
    <h3>Pembayaran yang anda lakukan</h3>

        <table class="fl-table">
            <thead>
            <tr>
            <th> No </th>
            <th> NISN </th>
            <th> Tanggal Bayar </th>
            <th> Bulan SPP </th>
            <th> Tahun SPP </th>                                     
            </tr>                    
            </thead>
            <tbody>
            <?php 
            // include "koneksi.php";
            // $sql = mysqli_query($conn, "SELECT A.nama_kelas FROM kelas A JOIN siswa B ON A.id_kelas=B.id_kelas ");
            $no=0;

            while($histori = mysqli_fetch_array($his)){
                $no++;
                $hapus="<td>"."<a href='hapus.php?id_pembayaran=".$histori_pembayaran['id_pembayaran']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-hapus'>Hapus</a>"."</td>";
                $ubah="<td>"."<a href='ubah_kelas.php?id_pembayaran=".$histori_pembayaran['id_pembayaran']."' onclick='return confirm(Apakah anda yakin menghapus data ini?)' class='button-ubah'>Ubah</a>"."</td>";

                // while($dt_buku=mysqli_fetch_array($sql)){
                //     $kelas=$dt_buku['nama_kelas'];
                // }
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$histori_pembayaran['nisn']?></td>
                    <td><?=$histori_pembayaran['tgl_bayar']?></td>
                    <td><?=$histori_pembayaran['bulan_spp']?></td>
                    <td><?=$histori_pembayaran['tahun_spp']?></td>
                </tr>  
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <!-- <a href="tambah_kelas.php" class="button-tambah">+ Tambah Kelas</a> -->
    <?php
        }
    ?>
    </main>

    <script src="app.js"></script>
</body>
</html>