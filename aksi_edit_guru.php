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
    $login_id = $_GET['id'];


    $login = mysqli_query($koneksi, "SELECT * FROM dblogin WHERE username='$username'");
    $cek = mysqli_num_rows($login);

    if($cek){
        $login = mysqli_fetch_assoc($login);
        if($username != $login["Username"]) {
            header("location:edit_guru.php?id=$login_id&username=exist");
        }
    }

    $login = mysqli_query($koneksi, "UPDATE dblogin SET username='$username', password= '$password' WHERE id=$login_id ");
    $guru = mysqli_query($koneksi, "UPDATE dbguru SET nip='$nip', nama='$nama', jeniskelamin='$jeniskelamin', agama='$agama', tanggallahir='$tanggallahir' WHERE login_id=$login_id ");

    if($guru){
        header("location:guru.php");
    }
?>