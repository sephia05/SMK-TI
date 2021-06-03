<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'admin'){
        header("location:index.php?is_not_admin=ditolak");
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $agama = $_POST['agama'];
    $tanggallahir = $_POST['tanggallahir'];


    $cek = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $cek = mysqli_num_rows($cek);

    if($cek){
        header("location:tambah_guru.php?username=exist");
    }

    $login = mysqli_query($koneksi, "INSERT INTO dblogin (username, password, jenis) VALUES ('$username', '$password', 'guru')");
    
    $login = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $data = mysqli_fetch_assoc($login);
    $login_id = $data['Id'];


    $guru = mysqli_query($koneksi, "INSERT INTO dbguru (nip, nama, jeniskelamin, agama, tanggallahir, login_id) VALUES ('$nip', '$nama', '$jeniskelamin', '$agama', '$tanggallahir', '$login_id')");
    if($guru){
        header("location:guru.php");
    }
?>