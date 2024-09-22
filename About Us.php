<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Portfolio</title>

</head>
<body>
    <section class="fluid">
        <img src="img/port-living-img.webp" class="w-100" style="height: 680px; object-fit: cover; filter: brightness(40%);">
        <header class="headerbar fixed-top">
            <div class="row" id="header-row">
                <div class="col-3 maintitle">
                    <span class="title1"><b>ChickNest</b></span>
                </div>
                <div class="nav col-9" >
                    <ul class="list1 gap-1">
                        <li class="item dropdown">
                            <a href="index.html"><b>HOW IT WORKS</b></a>
                            <div class="dropdown-content">
                                <a href="index.php">Details</a>
                                <a href="portfolio.php">The ChickNest 3D Difference</a>
                            </div></li>
                        </li>
                        <li class="item dropdown">
                            <a href="portfolio.html"><b>PORTFOLIO</b></a>
                            <div class="dropdown-content">
                                <a href="portfolio.php">Living Room Design ideas</a>
                                <a href="kitchen.php">Kitchen Design Ideas</a>
                            </div></li>
                        <li class="item dropdown">
                            <a href="services.html"><b>BLOG</b></a></li>
                        <li class="item dropdown">
                            <a href="projects.html"><b> STYLE QUIZ</b></a></li>
                        <li class="item dropdown">
                            <a href="news.html"><b>GIFT CARDS</b></a>
                            <div class="dropdown-content">
                                <a href="#">Project Gift Cards</a>
                                <a href="#">Furniture Gift Cards</a>
                            </div>
                        </li>
                        <li class="item">
                            <a href="contactUs.php"><b>LOGIN</b></a>
                        </li>
                        <li class="item">
                            <a href="contactUs.php"><button class="btn-start">GET STARTED</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="image-overlay">
            <h1 class="overlay-text" style="font-size: 64px; text-decoration: none;">Our Real Interior Design Makeovers</h1>
            <p class="overlay-subtext" style="font-size: 28px;">Exlore our transformations: <span class="dropdown"><b style="font-size: 35px;"><u>Choose your room</u></b> </span>
                <div class="dropdown-content">
                    <a href="portfolio.php">Living Room Design ideas</a>
                    <a href="kitchen.php">Kitchen Design Ideas</a>
                </div></p>
        </div>
        
    </section>
   

<!-- Footer starts from here -->
<footer class="footer-area bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <img src="img/logo.png" alt="logo" class="logo-img">
                <div class="socialarea">
                    <i class="fa-brands fa-facebook" style="padding-left: 30px;"></i>
                    <i class="fa-brands fa-twitter" style="padding-left: 10px;"></i>
                    <i class="fa-brands fa-instagram" style="padding-left: 10px;"></i>
                    <i class="fa-brands fa-pinterest" style="padding-left: 10px;"></i>
                    <i class="fa-brands fa-whatsapp" style="padding-left: 10px;"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6><b>Useful Links</b></h6>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Disclaimer</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h6><b>Contacts</b></h6>
                <div class="contact-info">
                    <p><i class="fa-regular fa-clock"></i> Monday to Friday 9:00am - 6:00pm</p>
                    <p><i class="fa-regular fa-location-dot"></i> Paris, New York</p>
                    <p><i class="fa-regular fa-phone"></i> +880123456789</p>
                    <p><i class="las la-envelope"></i> example@mail.com</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="subscribe-form">
                    <h6><b>Subscribe Us</b></h6>
                    <form method="post" action="https://www.hitechparks.com/web/apps/archi/subscribe">
                        <input type="text" class="form-control mb-2" placeholder="Enter your email">
                        <button type="submit" class="main_btn btn btn-success">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom  py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <p class="text-center">&copy; 2023 - ChickNest - Interiors</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>