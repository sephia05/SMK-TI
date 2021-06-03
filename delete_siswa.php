<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'admin'){
        header("location:index.php?is_not_admin=ditolak");;
    }

    $login = mysqli_query($koneksi, "DELETE FROM dblogin WHERE id=" . $_GET['id']);
    $siswa = mysqli_query($koneksi, "DELETE FROM dbsiswa WHERE login_id=" . $_GET['id']);
    if($login && $siswa){
        header("location:siswa.php");
    }
?>