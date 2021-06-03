
<?php
    include 'header.php';
?>
    <div class="container-fluid" >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="aleks-dorohovich-nJdwUHmaY8A-unsplash.jpg" class="d-block w-100" alt="..." style="max-height: 500px !important;">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <?php 
            if(isset($_GET['is_not_admin'])){
                if($_GET['is_not_admin']=="ditolak"){
                    echo "<div class='mt-3 alert'>Akses ditolak karena anda bukan Admin!</div>";
                }
            }

            elseif(isset($_GET['is_not_guru'])){
                if($_GET['is_not_guru']=="ditolak"){
                    echo "<div class='mt-3 alert'>Akses ditolak karena anda bukan Guru!</div>";
                }
            }
        ?>
        <h1 class="my-5 text-center">SMK Teknologi Informasi</h1>
        <?php
            if(isset($_SESSION['jenis'])){
                echo '<div class="row">
                <div class="col-4 text-center">
                    <a href="rpl.php">
                        <div class="card" style="border: 0;">
                            <img src="rpl.jpeg" class="card-img-top" style="max-height: 300px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Rekayasa Perangkat Lunak</h5>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-4 text-center">
                    <a href="tkj.php">
                        <div class="card" style="border: 0;">
                            <img src="tkj.jpeg" class="card-img-top" style="max-height: 300px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Teknik Komputer & Jaringan</h5>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-4 text-center">
                    <a href="mm.php">
                        <div class="card" style="border: 0;">
                            <img src="multimedia.jpeg" class="card-img-top" style="max-height: 300px;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">MultiMedia</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>';
            }
        ?>
    </div>

<?php
    include 'footer.php';
?>