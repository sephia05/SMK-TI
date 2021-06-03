<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'admin'){
        header("location:index.php?is_not_admin=ditolak");;
    }

    $login = mysqli_query($koneksi, "DELETE FROM dblogin WHERE id=" . $_GET['id']);
    $guru = mysqli_query($koneksi, "DELETE FROM dbguru WHERE login_id=" . $_GET['id']);
    if($login && $guru){
        header("location:guru.php");
    }
?>