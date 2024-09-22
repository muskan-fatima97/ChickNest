<?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success'>{$_SESSION['message']}</div>";
    unset($_SESSION['message']);
}
?>



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
    <title>ChickNest</title>

</head>
<body>
    

<?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

<div class="position-relative">
        <img src="img/home-bg1.webp" class="w-100" style="height: 680px; object-fit: cover; filter: brightness(40%);">
        <div class="overlay d-flex justify-content-center align-items-center">
            <div class="text-center text-white">
                <h1 style="font-size: 51px; font-weight: bolder;">Welcome to ChickNest</h1>
                <p class="slide-from-right" style="font-size: 45px;">Design, Collaborate & Transform</p>
                <a href="contactUs.php" class="btn">GET STARTED</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ChickNest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" aria-expanded="false">HOW IT WORKS</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="index.php">Details</a></li>
                                <li><a class="dropdown-item" href="3D_Differnece.php">The ChickNest 3D Difference</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">PORTFOLIO</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <li><a class="dropdown-item" href="portfolio.php">Living Room Design ideas</a></li>
                                <li><a class="dropdown-item"  href="kitchen.php">Kitchen Design Ideas</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">BLOG</a>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                  <a href="Admin/admin.php" class="btn">Admin</a>
              </li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
    
<div class="container home-detail " style="margin-top: 80px;" >
    <h1 id="typing-animation">Interior Design Services For Any Space</h1>

    <div class="row line1" style="margin-top: 100px;">
        <div class="col-6 animate-from-left" data-animation="slideFromLeft">
            <div class="home-img-1">
                <img src="img/home_img1.jpg" class="w-100" style="height: 400px; border-radius: 0 100px 0 100px; object-fit: cover;">
            </div>
        </div>
        <div class="col-6 homeContent-1 animate-from-right" style="padding-left: 100px;">
            <h4 style="font-size: 22px;"><span class="badge"><b class="animate-badge">1</b></span> TELL US YOUR NEEDS</h4>
            <p style="font-size: 18px; padding-right: 130px; padding-top: 30px; line-height: 2;" class="animate-text">To start your design project you'll complete a quick and easy questionnaire, let us know your preferences, attach photos of your room, and choose the inspiration you love.</p>
        </div>
        
    </div>
    
    
    
    <div class="line2" style="margin-top: 60px;">
        <h4 style="font-size: 22px;">
            <span class="badge"><b>2</b></span>
            RECEIVE CUSTOM PROPOSALS FROM MULTIPLE DESIGNERS
        </h4>
        <p style="font-size: 18px;padding-top: 15px;">Get multiple design concepts based on your assessment and budget. Choose your favorite professional designer to help translate your vision</p>
        <div class="img-container2">
            <img src="img/home-img2.webp" class="slide-down-image">
        </div>
    </div>
    
        <div class="row line3" style="margin-top: 100px;">
            <div class="col-6">
                <div class="home-img-1">
                    <img src="img/home-img3.webp" w-100 style="height: 400px;border-radius: 0 100px 0 100px;">
                </div>
            </div>
            <div class="col-6 homeContent-1" style="padding-right: 50px;">
                <h4 style="font-size: 22px;">
                    <span  class="badge"><b>3</b></span> 
                    WORK CLOSELY WITH YOUR CHOSEN DESIGNER
                </h4>
                <p style="font-size: 18px; padding-top: 30px;">To start your design project you'll complete a quick and easy questionnaire,
                    Your designer will work with you to bring your design to life. 
                    They'll use the perfect combination of new and existing pieces, 
                    review and refine your custom-made 3D model, 
                    floor plan, color palette and shopping list with you.</p>
            </div>
        </div> 
    </div>
    <div class="fluid home-receive">
        <h2 style="text-align: center; font-size: 28px; line-height: 30px;">You'll Receive</h2>
        <div class="container gap-5" style="display: flex; padding-top: 50px;">
            <div class="row animated-row">
                <div class="col receive-img">
                    <img src="img/receive-1.webp" w-100 height="200px">
                    <p>Concepts From Multiple Designers</p>
                </div>
                <div class="col receive-img">
                    <img src="img/receive-2.webp" w-100 height="200px">
                    <p>Constant Communication With Your Chosen Designer</p>
                </div>
                <div class="col receive-img" style="text-align: center;">
                    <img src="img/receive-3.webp" w-100 height="200px">
                    <p>Final Photorealistic 3D Designs</p>
                </div>
                <div class="col receive-img">
                    <img src="img/receive-4.webp" w-100 height="200px">
                    <p>Floor Plan And Color Palette</p>
                </div>
                <div class="col receive-img">
                    <img src="img/receive-5.webp" w-100 height="200px">
                    <p>Shopping List And White Glove Concierge Service</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container home-detail" >
        <div class="row line1 " style="margin-top: 50px;">
            <div class="col-6 ">
                <div class="home-img-1">
                    <img src="img/home-img4.webp" w-100 style="height: 400px;padding-top: 80px; border-radius: 0 100px 0 100px;">
                </div>
            </div>
            <div class="col-6 homeContent-1" style="padding-left: 100px;">
                <h4 style="font-size: 22px;">
                    <span  class="badge"><b>4</b></span> 
                    ORDER AND TRACK YOUR ITEMS
                </h4>
                <p style="font-size: 18px; padding-right: 130px; padding-top: 30px;line-height: 2.cap;">You'll have the flexibility to buy the items on your own timeline as needed.
                     Our white-glove shopping concierge service never expires and ensures that 
                     you'll get the best price possible with our exclusive discounts saving you $1000s.</p>
            </div>
        </div>

        <div class="line5">
            <div class="row line-5">
                <p style="font-size: 22px;">
                    <span  class="badge"><b>5</b></span>
                    ENJOY YOUR DREAM ROOM DESIGN!
                </p>
            </div>
            <div class="home-img5" style="padding-top: 10px;">
                <img src="img/home-img5.webp" w-100 style="height: 600px;">
            </div>
        </div>
    </div>

    <div class="fluid home-receive2">
        <h2>Ready to make your dream space a Reality?</h2>
        <div class="btn-lets-start">
            <a href="contactUs.php" class="btn-get-start">LET'S GET STARTED</a>
        </div>
    </div>

    

    <div class="container main-home-card gap-5 ">
        <div class="home-card card1" style="border-radius: 0 100px 0 100px;">
            <h4>Save Time</h4>
            <p>Realistic 3D model & top professional help to take the guesswork out of the designing process.</p>
        </div>
        <div class="home-card card2" style="border-radius: 0 100px 0 100px;">
            <h4>Save Money</h4>
            <p>Top talent for up to 80% less than traditional interior design & trade discounts of 5% to 45% at the top vendors</p>
        </div>
        <div class="home-card card3" style="border-radius: 0 100px 0 100px;">
            <h4>Convenient & Stress Free</h4>
            <p>A fun and easy white-glove service including everything from design to convenient ordering.</p>
        </div>
    </div>
    
    

    <div class="container question">
        <h2>Frequently Asked Question</h2>
        <div class="Q-1">
            <p>How long does it take?</p>
            <i class="fa-solid fa-angle-down" style=" font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
        <div class="Q-1">
            <p>Do you offer in-home services?</p>
            <i class="fa-solid fa-angle-down" style=" font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
        <div class="Q-1">
            <p>What happens once i select the winning design?</p>
            <i class="fa-solid fa-angle-down" style=" font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
        <div class="Q-1">
            <p>How do i receive you exclusive frniture discounts?</p>
            <i class="fa-solid fa-angle-down" style=" font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
        <div class="Q-1">
            <p>Are top designers available on ChickNest?</p>
            <i class="fa-solid fa-angle-down" style="font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
        <div class="Q-1">
            <p>What is you 100% satisfaction garuntee?</p>
            <i class="fa-solid fa-angle-down" style=" font-size: 22px;"></i>
            <div class="dropdown-content">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A laboriosam totam recusandae rerum quibusdam? Eaque odio distinctio quibusdam saepe dolore.</p>
            </div>
        </div>
    </div>

     <!-- Footer starts from here -->
    <footer class="footer-area bg-dark text-light py-5">
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



<script>

document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.intersectionRatio > 0) {
                entry.target.classList.add("animated");
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll(".animate-from-left, .animate-from-right").forEach(item => {
        observer.observe(item);
    });

    window.addEventListener('scroll', function() {
        var element = document.querySelector('.homeContent-1');
        var position = element.getBoundingClientRect().top;
        var screenPosition = window.innerHeight;

        if (position < screenPosition) {
            element.classList.add('animate-from-right');
        }
    });
});





    document.addEventListener("DOMContentLoaded", function() {
   const dropdownItems = document.querySelectorAll('.nav-item.dropdown');
   dropdownItems.forEach(function(navItem) {
       const dropdownMenu = navItem.querySelector('.dropdown-menu');
       if (dropdownMenu) {
           // Show dropdown menu on mouseenter
           navItem.addEventListener('mouseenter', function(event) {
               dropdownMenu.classList.add('show');
           });
           // Hide dropdown menu on mouseleave
           navItem.addEventListener('mouseleave', function(event) {
               dropdownMenu.classList.remove('show');
           });
       }
   });
});
$(document).ready(function() {
$('.Q-1').click(function(event) {
   // Toggle the "clicked" class to activate dropdown
   $(this).toggleClass('clicked');
   
   // Adjust position of the next div to make space for dropdown
   $(this).next().css('margin-top', $('.dropdown-content').outerHeight());
   
   // Prevent event propagation to avoid hiding dropdown immediately
   event.stopPropagation();
});

// Hide dropdown when clicking somewhere else on the page
$(document).click(function(event) {
   if (!$(event.target).closest('.Q-1').length) {
       $('.Q-1').removeClass('clicked');
   }
});
});

document.addEventListener('DOMContentLoaded', function() {
    const typingElement = document.getElementById('typing-animation');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.intersectionRatio > 0) {
                typingElement.classList.add('typing');
            } else {
                typingElement.classList.remove('typing');
            }
        });
    });

    observer.observe(typingElement);
});


// Animation for card shuffel



</script>


</html>
