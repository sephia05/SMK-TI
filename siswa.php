
<?php
    include 'header.php';
?>


    <div class="container-fluid">
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <div class="row">
            <div class="container">
                <h1>Daftar Siswa</h1>
                <?php 
                    if(isset($_SESSION['jenis'])){
                        if($_SESSION['jenis'] == 'admin') {
                            echo '<a class="btn btn-success float-right mb-3" href="tambah_siswa.php">Tambah Siswa</a>';
                        }
                    }
                ?>
                <table class="table mb-5">
                    <tr class="bg-primary color-white">
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                        include 'koneksi.php';
                        $daftar_siswa = mysqli_query($koneksi,"SELECT * FROM dbsiswa INNER JOIN dblogin ON dbsiswa.login_id=dblogin.Id");
                        while ($siswa =  mysqli_fetch_assoc($daftar_siswa)) {
                            if(isset($_SESSION['jenis'])){
                                if($_SESSION['jenis'] == 'admin') {
                                    echo '
                                    <tr>
                                        <td>' . $siswa["nis"] . '</td>
                                        <td>' . $siswa["nama"] . '</td>
                                        <td>' . $siswa["Username"] . '</td>
                                        <td>' . $siswa["jeniskelamin"] . '</td>
                                        <td> <a href="edit_siswa.php?id=' . $siswa["login_id"] . '"> Ubah </a> | <a href="delete_siswa.php?id=' . $siswa["login_id"] . '">Hapus</a>
                                    </tr>';
                                }else{
                                    echo '
                                    <tr>
                                        <td>' . $siswa["nis"] . '</td>
                                        <td>' . $siswa["nama"] . '</td>
                                        <td>' . $siswa["Username"] . '</td>
                                        <td>' . $siswa["jeniskelamin"] . '</td>
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