
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
        <h1 class="mt-5 text-center">SMK Teknologi Informasi</h1>
        <h4 class="text-center">Jl. Kuwukan Garuda Ramayana D3 Lontar Surabaya</h4>
        <h4 class="text-center">031-7407465</h4>
        <div class="text-center border mb-3 mt-5" style="width: 80%; margin-left: 10%;">
            <h2 class="border">VISI</h2>
            <h5 style="width: 50%; margin-left: 25%;">Mewujudkan tenaga menengah dan profesional dalam bidang Teknologi informasi sesuai dwngan tuntutan dunia industri dengan etos kerja yang tinggi dan memiliki keterampilan dalam bidang teknologi informasi.</h5>
        </div>

        <div class="border my-3" style="width: 80%; margin-left: 10%;">
            <h2  class="text-center border">MISI</h2>
            <ol style="width:50%; margin-left: 25%;">
                <li>
                    <h5>Mengembangkan sikap dan keterampilan peserta didik keahlian teknologi informasi.</h5>
                </li>
                <li>
                    <h5>Menguasai keterampilan dalam pengoperasian bidang teknologi informasi.</h5>
                </li>
                <li>
                    <h5>Menguasai keterampilan dalam penggunaan perangkat teknologi informasi.</h5>
                </li>
                <li>
                    <h5>Mampu mengembangkan bidang teknologi informasi yang relevan dengan tuntutan kebutuhan masyarakat.</h5>
                </li>
            </ol>
        </div>

        <div class="my-5" style="width: 80%; margin-left: 10%;">
            <i class="bi bi-facebook"></i> : <a href="https://facebook.com">smkteknologinformasi1</a> <br>
            <i class="bi bi-instagram"></i> : <a href="https://instagram.com">smk.ti</a> <br>
            <i class="bi bi-telegram"></i> : <a href="https://telegram.com">085878656567</a> <br>
        </div>

    </div>

<?php
    include 'footer.php';
?>