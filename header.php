<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
    
        <li class="nav-item active">
            <a class="nav-link" href="profil.php">Profil <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item active">
            <a class="nav-link" href="fasilitas.php">Fasilitas <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item active">
            <a class="nav-link" href="berita.php">Berita <span class="sr-only">(current)</span></a>
        </li>

        <?php
            session_start();
            if(isset($_SESSION['jenis'])){
                echo '<li class="nav-item active">
                    <a class="nav-link" href="siswa.php">Siswa<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="guru.php">Guru<span class="sr-only">(current)</span></a>
                </li>
                ';
            }
        ?>

        </ul>
        <?php 
            if(isset($_SESSION['jenis'])){
                echo '<div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-white">Halo, '. $_SESSION["username"] .'</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <a class="btn dropdown-item" href="logout.php">Keluar</a>
                </div>
              </div>';
                echo '<form class="form-inline my-2 my-lg-0">
                
            </form>';
            }else{
                echo '<form class="form-inline my-2 my-lg-0">
                <a class="nav-link btn btn-light text-dark" href="login.php">Masuk SSO <span class="sr-only">(current)</span></a>
            </form>';
            }
        ?>
    </div>
    </nav>