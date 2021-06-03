
<?php
    include 'header.php';
?>


    <div class="container-fluid">
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <div class="row">
            <div class="container">
                <h1>Daftar Guru</h1>
                <?php 
                    if(isset($_SESSION['jenis'])){
                        if($_SESSION['jenis'] == 'admin') {
                            echo '<a class="btn btn-success float-right mb-3" href="tambah_guru.php">Tambah Guru</a>';
                        }
                    }
                ?>
                <table class="table mb-5">
                    <tr class="bg-primary color-white">
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                        include 'koneksi.php';
                        $daftar_guru = mysqli_query($koneksi,"SELECT * FROM dbguru INNER JOIN dblogin ON dbguru.login_id=dblogin.Id");
                        while ($guru =  mysqli_fetch_assoc($daftar_guru)) {
                            if(isset($_SESSION['jenis'])){
                                if($_SESSION['jenis'] == 'admin') {
                                    echo '
                                    <tr>
                                        <td>' . $guru["nip"] . '</td>
                                        <td>' . $guru["nama"] . '</td>
                                        <td>' . $guru["Username"] . '</td>
                                        <td>' . $guru["jeniskelamin"] . '</td>
                                        <td>' . $guru["agama"] . '</td>
                                        <td>' . date('d-m-Y', strtotime($guru["tanggallahir"])) . '</td>
                                        <td> <a href="edit_guru.php?id=' . $guru["login_id"] . '"> Ubah </a> | <a href="delete_guru.php?id=' . $guru["login_id"] . '">Hapus</a>
                                    </tr>';
                                }else{
                                    echo '
                                    <tr>
                                        <td>' . $guru["nip"] . '</td>
                                        <td>' . $guru["nama"] . '</td>
                                        <td>' . $guru["Username"] . '</td>
                                        <td>' . $guru["jeniskelamin"] . '</td>
                                        <td>' . $guru["agama"] . '</td>
                                        <td>' . date('d-m-Y', strtotime($guru["tanggallahir"])) . '</td>
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