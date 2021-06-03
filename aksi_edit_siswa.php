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
    $login_id = $_GET['id'];


    $login = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $cek = mysqli_num_rows($login);

    if($cek){
        $login = mysqli_fetch_assoc($login);
        if($username != $login["Username"]){
            header("location:edit_siswa.php?id=$login_id&username=exist");
        }
    }

    $login = mysqli_query($koneksi, "UPDATE dblogin SET username='$username', password= '$password' WHERE id=$login_id ");
    $siswa = mysqli_query($koneksi, "UPDATE dbsiswa SET nis='$nis', nama='$nama', jeniskelamin='$jeniskelamin' WHERE login_id=$login_id ");

    if($siswa){
        header("location:siswa.php");
    }
?>