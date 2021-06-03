<!DOCTYPE html>
<html>
<head>
	<title>Masuk</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
	<h1>SMK Teknologi Informasi</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Nama Pengguna dan Kata Sandi tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Masuk</p>
 
		<form action="cek_login.php" method="post">
			<label>Nama Pengguna</label>
			<input type="text" name="username" class="form_login" placeholder="Nama Pengguna" required="required">
 
			<label>Kata Sandi</label>
			<input type="password" name="password" class="form_login" placeholder="Kata Sandi" required="required">
 
			<input type="submit" class="tombol_login" value="MASUK">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">KEMBALI</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>