
<?php
    include 'header.php';
    include 'koneksi.php';
?>
    <div class="container-fluid">
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <div class="row">
            <div class="container">
                <?php 
                    if(isset($_GET['username'])){
                        if($_GET['username']=="exist"){
                            echo "<div class='mt-3 alert'>Username Sudah terdaftar!</div>";
                        }
                    }
                    $daftar_jurusan = mysqli_query($koneksi,"SELECT * FROM dbjurusan");
                    $daftar_kelas = mysqli_query($koneksi,"SELECT * FROM dbkelas");
                ?>
                <h3 class="">Form Tambah RPP</h3>
                <form action="aksi_tambah_rpp.php" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="text" class="form-control" placeholder="File" name="file">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="idjurusan">
                            <?php
                                while ($jurusan =  mysqli_fetch_assoc($daftar_jurusan)) {
                                    echo '<option value="'. $jurusan['id'] .'">'. $jurusan['nama'] .'</option>';
                                }
                            ?>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="idkelas">
                            <?php
                                while ($kelas =  mysqli_fetch_assoc($daftar_kelas)) {
                                    echo '<option value="'. $kelas['id'] .'">'. $kelas['nama'] .'</option>';
                                }
                            ?>  
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>