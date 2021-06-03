<?php
    session_start();
    include 'koneksi.php';

    if($_SESSION['jenis'] != 'admin'){
        header("location:index.php?is_not_admin=ditolak");
    }

    $file = $_POST['file'];
    $nama = $_POST['nama'];
    $idjurusan = $_POST['idjurusan'];
    $idkelas = $_POST['idkelas'];


    $siswa = mysqli_query($koneksi, "INSERT INTO dbrpp (file, nama, idjurusan, idkelas) VALUES ('$file', '$nama', '$idjurusan', '$idkelas')");
    if($siswa){
        header("location:index.php");
    }
?>