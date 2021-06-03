<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'guru'){
        header("location:index.php?is_not_guru=ditolak");;
    }

    $rpp = mysqli_query($koneksi, "DELETE FROM dbrpp WHERE id=" . $_GET['id']);
    if($rpp){
        header("location:index.php");
    }
?>