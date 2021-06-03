
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
                <h3 class="">Form Ubah Guru</h3>
                <form action="aksi_edit_guru.php?id=<?php echo $login['Id']; ?>" method="POST">
                    <div class="form-group">
                        <label>Nama Pengguna</label>
                        <input type="text" class="form-control" placeholder="Nama Pengguna" name="username" value="<?php echo $login['Username']; ?>">
                        <input type="hidden" class="form-control" name="jenis" value="guru">
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" class="form-control" placeholder="Kata Sandi" name="password" value="<?php echo $login['Password']; ?>">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" placeholder="NIP" name="nip" value="<?php echo $guru['nip']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $guru['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" <?php if($guru['jeniskelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen" <?php if($guru['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                            <option value="Katolik" <?php if($guru['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                            <option value="Hindu" <?php if($guru['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                            <option value="Budha" <?php if($guru['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                            <option value="Konghucu" <?php if($guru['agama'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir" value="<?php echo $guru['tanggallahir']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>