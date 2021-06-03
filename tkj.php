
<?php
    include 'header.php';
?>


    <div class="container-fluid">
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <div class="row">
            <div class="container">
                <h1>Daftar RPP TKJ</h1>
                <?php 
                    if(isset($_SESSION['jenis'])){
                        if($_SESSION['jenis'] == 'guru') {
                            echo '<a class="btn btn-success float-right mb-3" href="tambah_rpp.php">Tambah RPP</a>';
                        }
                    }
                ?>
                <table class="table mb-5">
                    <tr class="bg-primary color-white">
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                        include 'koneksi.php';
                        $daftar_rpp = mysqli_query($koneksi,"SELECT dbrpp.id, dbrpp.nama, dbrpp.file, dbjurusan.nama as jurusan, dbkelas.nama as kelas FROM dbrpp INNER JOIN dbjurusan ON dbrpp.idjurusan=dbjurusan.id INNER JOIN dbkelas ON dbrpp.idkelas=dbkelas.id WHERE dbjurusan.singkatan='TKJ'");
                        while ($rpp =  mysqli_fetch_assoc($daftar_rpp)) {
                            if(isset($_SESSION['jenis'])){
                                if($_SESSION['jenis'] == 'guru') {
                                    echo '
                                    <tr>
                                        <td>' . $rpp["nama"] . '</td>
                                        <td>' . $rpp["jurusan"] . '</td>
                                        <td>' . $rpp["kelas"] . '</td>
                                        <td><a href="' . $rpp["file"] . '">' . $rpp["file"] . '</td>
                                        <td><a href="delete_rpp.php?id=' . $rpp["id"] . '">Hapus</a>
                                    </tr>';
                                }else{
                                    echo '
                                    <tr>
                                        <td>' . $rpp["nama"] . '</td>
                                        <td>' . $rpp["jurusan"] . '</td>
                                        <td>' . $rpp["kelas"] . '</td>
                                        <td><a href="' . $rpp["file"] . '">' . $rpp["file"] . '</td>
                                    </tr>';
                                }
                            }
                            
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>


<?php
    include 'footer.php';
?>