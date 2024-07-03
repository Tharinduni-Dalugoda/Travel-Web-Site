<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- fontawosome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        
    </style>
</head>

<body>
    <!-- start header -->
    <section class="header">
        <a href="home.php" class="logo"><b> Travel. </b> </a>

        <nav class="navbar">
            <a href="home.php"> Home </a>
            <a href="about.php"> About </a>
            <a href="package.php"> Package </a>
            <a href="book.php"> Book </a>
        </nav>

        <div id="menu-btn" class="fa-solid fa-bars"></div>

    </section>
    <!-- end header -->
    
    
    <!-- start home section -->
    <section class="home">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
                <div class="carousel-item active" style="height:600px; width:1360px;">
                    <img src="images/bg29.jpg"  alt="...">
                    <div class="content">
                        <span><b>explpre, discover,travel</b></span>
                        <h3>travel arround <br>the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/bg26.avif" style="height: 600px; width: 1360px;" alt="...">
                    <div class="content">
                        <span><b>explpre, discover,travel</b></span>
                        <h3>travel arround <br>the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/bg28.avif" style="height: 600px; width: 1360px;"   alt="...">
                    <div class="content">
                        <span>explpre, discover,travel</span>
                        <h3>travel arround <br>the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    </section>    

    <!-- end home section -->
    

    <!-- start services --> 
    <section class="services">
        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/advanture3.webp" alt="">
                <h3>advanture</h3>
            </div>

            <div class="box">
                <img src="images/guide.avif" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking" alt=""> 
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/campfire4.webp" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/camping.avif" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>  
    <!-- end services -->









    <!-- start footer -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3 style="color:aliceblue"> Quick links </h3>
                <a href=".php"><i class="fa-solid fa-angle-right"></i> Home </a>
                <a href=".php"><i class="fa-solid fa-angle-right"></i> About </a>
                <a href="package.php"><i class="fa-solid fa-angle-right"></i> Package </a>
                <a href="book.php"><i class="fa-solid fa-angle-right"></i> Book </a>
            </div>

            <div class="box">
                <h3 style="color:aliceblue">Extra Links</h3>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Terms Of Use</a>
            </div>

            <div class="box">
                <h3 style="color:aliceblue">Contact info</h3>
                <a href="#"><i class="fa-solid fa-phone"></i>+9473-493-3898</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+9473-493-8872</a>
                <a href="#"><i class="fa-regular fa-envelope"></i>tharinduni@gmail.com</a>
                <a href="#"><i class="fa-regular fa-location-dot"></i>Colombo- Srilanka</a>
            </div>

            <div class="box">
                <h3 style="color:aliceblue">Contact info</h3>
                <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i>twitter</a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i>linkedin</a>
            </div>

        </div>
    </section>
    <!-- end footrer -->


    <!-- js link -->
    <script src="script.js"></script>
    <!-- swiperjs link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- boostrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>