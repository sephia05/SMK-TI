
<?php
    include 'header.php';
?>

    <div class="container-fluid">
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <div class="row">
            <div class="container">
                <?php 
                    if(isset($_GET['username'])){
                        if($_GET['username']=="exist"){
                            echo "<div class='mt-3 alert'>Nama Pengguna Sudah terdaftar!</div>";
                        }
                    }
                ?>
                <h3 class="">Form Tambah Guru</h3>
                <form action="aksi_tambah_guru.php" method="POST">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" class="form-control" placeholder="Nama Pengguna" name="username">
                        <input type="hidden" class="form-control" name="jenis" value="guru">
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" placeholder="NIP" name="nip">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>