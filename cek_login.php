<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from dblogin where Username='$username' and Password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['jenis']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
		$_SESSION['jenis'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:index.php");

	// cek jika user login sebagai guru
	}else if($data['jenis']=="guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
		$_SESSION['jenis'] = "guru";
		// alihkan ke halaman dashboard guru
		header("location:index.php");

	// cek jika user login sebagai siswa
	}else if($data['jenis']=="siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
		$_SESSION['jenis'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}else{
	header("location:login.php?pesan=gagal");
}

?>