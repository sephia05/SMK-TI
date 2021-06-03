
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
                <h3 class="">Form Ubah Siswa</h3>
                <form action="aksi_edit_siswa.php?id=<?php echo $login['Id']; ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" class="form-control" placeholder="Nama Pengguna" name="username" value="<?php echo $login['Username']; ?>">
                        <input type="hidden" class="form-control" name="jenis" value="siswa">
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" placeholder="Kata Sandi" name="password" value="<?php echo $login['Password']; ?>">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" class="form-control" placeholder="NIS" name="nis" value="<?php echo $siswa['nis']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $siswa['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" <?php if($siswa['jeniskelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
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