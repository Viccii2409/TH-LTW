<!DOCTYPE html>
<html>
<head>
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Việt Nam</title>
    <link rel="stylesheet" href="/TH2 - TH3/movie.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/animations.min.css' rel='stylesheet'>
</head>
<body>
<div class="header">
    <nav>
        <img src="/TH2 - TH3/Movies Website Images And Video/img/logo.png" class="logo">
        <div>
            <a href="/TH2 - TH3/movie.html"><button>Home</button></a>
        </div>
    </nav>
    <section class ="home container" id="home">
        <img src="/TH2 - TH3/Movies Website Images And Video/play-page/play-background.jpg" alt="" class="home-img">
        <div class="home-text">
            <h1 class="home-title">Jumanji: Welcome to the Jungle</h1>
            <p>Releasing 10 April</p>
            <a href="play-page.html" class="watch-btn">
                <i class='bx bx-right-arrow' ></i>
                <span>Watch the trailer</span>
            </a>
        </div>
    </section>

    <section class="movies container" id="movies">
        <div class="heading">
            <h2 class="heading-title">PHIM MỚI</h2>
            <div class="page-btn">
                <a href="#" class="page-prev"><i class='bx bx-skip-previous'></i></a>
                <div class="page-number">3</div>
                <a href="#" class="page-next"><i class='bx bx-skip-next'></i></i></a>
                <div class="page-prev"></div>
                <div class="page-next"></div>
            </div>
        </div>
        <div class="movies-content">
<?php
$sql_phimmoi = "SELECT * FROM phim_danhsach,phim_quocgia ODER BY id_phim ASC";
$result_phimmoi = mysqli_query( $conn, $sql_phimmoi);

if (mysqli_num_rows($result_phimmoi) > 0) {
    // output data of each row
    while($row_phimmoi = mysqli_fetch_assoc($result_phimmoi)) {
  
?>
            <div class="movie-box">
                <img src="/TH2 - TH3/Movies Website Images And Video/img/movie-1.jpg" class="movie-box-img">
                <div class="box-text">
                    <h2 class="movie-title"><?php echo $row_phimmoi["tenphim"]?></h2>
                    <span class="movie-type"><?php echo $row_phimmoi["tenquocgia"]?></span>
                    <a href="movies.php?" class="watch-btn play-btn">
                        <i class='bx bx-right-arrow' ></i>
                    </a>
                </div>
            </div>
<?php }
}else{
    echo "NO DATA";
}?>
        </div>
    </section>
</div>
<?php
include "./TH2 - TH3/connect.php";
?>
</body>
</html>
    