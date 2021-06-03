<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'admin'){
        header("location:index.php?is_not_admin=ditolak");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];


    $cek = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $cek = mysqli_num_rows($cek);

    if($cek){
        header("location:tambah_siswa.php?username=exist");
    }

    $login = mysqli_query($koneksi, "INSERT INTO dblogin (username, password, jenis) VALUES ('$username', '$password', 'siswa')");
    
    $login = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $data = mysqli_fetch_assoc($login);
    $login_id = $data['Id'];


    $siswa = mysqli_query($koneksi, "INSERT INTO dbsiswa (nis, nama, jeniskelamin, login_id) VALUES ('$nis', '$nama', '$jeniskelamin', '$login_id')");
    if($siswa){
        header("location:siswa.php");
    }
?>