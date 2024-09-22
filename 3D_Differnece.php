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
    <title>3D_Difference</title>

    <style>
        .online-room-design h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .online-room-design p {
            font-size: 1.2em;
            color: #555;
        }

        .online-room-design .caption {
            font-weight: bold;
            font-size: 1.1em;
            color: #333;
        }

        .testimonial {
            padding: 40px;
            background-color: #f9f9f9;
            border-radius: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .testimonial img {
            border: 2px solid #ddd;
        }

        .testimonial blockquote {
            font-size: 12px;
            color: #555;
            margin: 0;
            padding: 0;
        }

        .testimonial blockquote p {
            font-style: italic;
            font-size: 22px;
            margin-left: 90px;
            margin-right: 90px;
        }

        .testimonial blockquote footer {
            font-size: 22px;
            color: #333;
            margin-top: 10px;
        }

        .room-design-features {
            margin-top: 110px;
        }

        .room-design-features .container {
            text-align: center;
        }

        .room-design-features h2 {
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        .room-design-features p {
            font-size: 1.2em;
            color: #666;
        }

        .room-design-features .row {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .room-design-features .feature-item {
            flex: 1;
            max-width: 180px;
            margin-top:50px;
        }

        .room-design-features .feature-icon {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }

        .room-design-features .feature-item p {
            font-size: 17px;
            margin-top: 10px;
            color: #333;
        }

        .room-design-features .feature-item i {
            font-size: 30px;
            color: #969131;
        }

        /* animation */
        .feature-item {
    position: relative;
    animation: jumpFeatureItem 3s infinite linear; /* Adjust animation duration as needed */
}

@keyframes jumpFeatureItem {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-50px); /* Adjust the height of the jump as needed */
    }
}


.centered-div {
    text-align: center;
    margin-top:100px;
}

.centered-div  h1 p {
    margin-bottom: 10px; /* Adjust spacing between text and image */
}

.centered-image {
    width: 800px; /* Set initial width */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Adjust corner radius */
}

.animate-left {
    animation: slideInFromLeft 1s ease forwards;
    opacity: 0;
}

.animate-right {
    animation: slideInFromRight 1s ease forwards;
    opacity: 0;
}

@keyframes slideInFromLeft {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideInFromRight {
    0% {
        transform: translateX(100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}

.tabs {
            display: flex;
            margin-bottom: 20px;
            margin-top:100px;
        }

        .tab {
            background: none;
            border: none;
            font-size: 18px;
            margin: 0 10px;
            cursor: pointer;
            padding: 10px;
        }

        .tab.active {
            border-bottom: 2px solid #000;
        }

        .content {
            display: flex;
        }

        .image-slider {
            flex: 1;
            padding-right: 20px;
        }

        .image-slider img {
            width: 100%;
            border-radius: 8px;
        }

        .text-content {
            flex: 1;
            padding-left:30px;
            padding-right:0px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="position-relative">
        <img src="img/3D_Difference_main_img.webp" class="w-100" style="height: 680px; object-fit: cover; filter: brightness(40%);">
        <div class="overlay d-flex justify-content-center align-items-center">
            <div class="text-center text-white">
                <h1 style="font-size: 51px; ">The ChickNest </h1>
                <p class="slide-from-right" style="font-size: 45px;">3D Difference</p>
                <p class="slide-from-right" style="font-size: 25px;">With the power of virtual interior design, our designers carefully craft 3D room designs to easily visualize your dream space!</p>
                <a href="contactUs.php" class="btn">Transform My Space</a>
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
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown1" role="button" aria-expanded="false">HOW IT WORKS</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="index.php">Details</a></li>
                                <li><a class="dropdown-item" href="3D_ifference.php">The ChickNest 3D Difference</a></li>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">GIFT CARDS</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <li><a class="dropdown-item" href="#">Project Gift Cards</a></li>
                                <li><a class="dropdown-item" href="#">Furniture Gift Cards</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs.php">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <section class="online-room-design" style="margin-top: 90px; margin-bottom:90px;">
    <div class="container text-center my-5">
        <h2 id="typing-animation">Experience Online Room Design</h2>
        
        <div class="row justify-content-center" style="margin-top:70px;">
            <div class="col-md-4 text-center animate-left"> <!-- Add animate-left class -->
                <img src="img/3D_2nd_img.webp" class="img-fluid" alt="Design Board" style="width: 100%; height: auto; max-width: 400px; max-height: 300px; object-fit: cover;">
                <div class="caption mt-2">Classic Contemporary Dining Room</div>
                <p class="mt-4">Every virtual room design includes concepts from multiple designers to ensure you get just the look you're after!</p>
            </div>
            
            <!-- Middle column with the arrow image -->
            <div class="col-md-4 text-center" style="margin-top:70px;"> <!-- Adjust column size as needed -->
                <!-- Place your image and apply rotation here -->
                <img src="img/arrow.webp" class="img-fluid" alt="Your Image" style="transform: rotate(360deg);" width="270px" height="270px" >
            </div>
            
            <div class="col-md-4 text-center animate-right"> <!-- Add animate-right class -->
                <p>Let our professional interior designers breathe life into your new space by creating lifelike online room designs.</p>
                <img src="img/3D_3rd_img.webp" class="img-fluid" alt="Room Image" style="width: 100%; height: auto; max-width: 400px; max-height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>




    <div class="testimonial my-5 text-center">
        <img src="img/person1.jpg" alt="Mary Richardson" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
        <blockquote class="blockquote">
            <p class="mb-0">“I was able to see my new space before it even existed! The 3D room design made all the difference for me and let me see different versions of my room so I could make confident purchase decisions.”</p>
            <footer class="blockquote-footer"><b>Mary Richardson</b></footer>
        </blockquote>
    </div>

    <section class="room-design-features">
        <div class="container text-center my-5">
            <h2>Our designers craft all-encompassing online room designs</h2>
            <p>Designing a room online has never been so simple and fun</p>
            <div class="row justify-content-center" id="feature-items" >
                <div class="col-md-2 feature-item">
                    <i class="fa-solid fa-couch"></i>
                    <p>Up to 45% off at +350 furniture stores</p>
                </div>
                <div class="col-md-2 feature-item">
                    <i class="fa-solid fa-lightbulb"></i>
                    <p>Concepts from multiple top designers</p>
                </div>
                <div class="col-md-2 feature-item">
                    <i class="fa-solid fa-phone-volume"></i>
                    <p>One-on-one interior design consultation</p>
                </div>
                <div class="col-md-2 feature-item">
                    <i class="fa-solid fa-couch"></i>
                    <p>3D model of your space</p>
                </div>
                <div class="col-md-2 feature-item">
                    <i class="fa-solid fa-swatchbook"></i>
                    <p>Color palette & floor plan</p>
                </div>
            </div>
        </div>
    </section>

    <div class="centered-div">
    <h1>Receive Initial Concepts From Multiple Designers</h1>
<p style="margin-top:50px; font-size:18px;">With a choice between designers, you'll always get a design you love.</p>
    <img src="img/home-img2.webp" alt="Your Image" class="centered-image">
</div>

<div class="container">
        <div class="tabs">
            <button id="before-tab" class="tab active" onclick="showBefore()">BEFORE</button>
            <button id="after-tab" class="tab" onclick="showAfter()">AFTER</button>
        </div>
        <div id="before-content" class="content">
            <div class="image-slider">
                <img src="img/3D-Before-img-slider1.webp" alt="Before Image">
            </div>
            <div class="text-content">
                <h2>Client's Challenge</h2>
                <p>We would like a more minimal look with Feng Shui and natural elements that highlight our beautiful green view.</p>
                <h2>Result</h2>
                <p>"We got the relaxing dream home we always wanted. Wanda was fun to work with and paid attention to every single detail."<br> - Kris</p>
                <p style="color:#979005;">★★★★★</p>
            </div>
        </div>
        <div id="after-content" class="content hidden">
            <div class="image-slider">
                <img src="img/3D_possibility2.webp" alt="After Image">
            </div>
            <div class="text-content">
                <h2>Client's Challenge</h2>
                <p>We would like a more minimal look with Feng Shui and natural elements that highlight our beautiful green view.</p>
                <h2>Result</h2>
                <p>"We got the relaxing dream home we always wanted. Wanda was fun to work with and paid attention to every single detail."<br> - Kris</p>
                <p style="color:#979005;">★★★★★</p>
            </div>
        </div>
    </div>

    <div class="fluid home-receive2">
        <h2>Ready to see 3D Difference in your space?</h2>
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

    <!-- Footer starts from here -->
    <footer class="footer-area bg-dark text-light py-5" style="margin-top:80px;">
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

window.onload = function() {
    var featureItems = document.querySelectorAll('.feature-item');
    var index = 0;

    function jumpNextFeatureItem() {
        // Reset previous feature item to its original position
        if (index > 0) {
            featureItems[index - 1].style.animation = '';
            void featureItems[index - 1].offsetWidth; // Trigger reflow
        }

        // Set animation for the next feature item
        featureItems[index].style.animation = 'jumpFeatureItem 1s linear';
        index = (index + 1) % featureItems.length; // Move to the next feature item
    }

    // Start the animation sequence
    setInterval(jumpNextFeatureItem, 5000); // Adjust interval time as needed
};



// Function to add animation class when the elements come into view
function animateOnScroll() {
    var animateLeft = document.querySelector('.animate-left');
    var animateRight = document.querySelector('.animate-right');

    if (isInViewport(animateLeft)) {
        animateLeft.classList.add('animated', 'slideInFromLeft');
    } else {
        animateLeft.classList.remove('animated', 'slideInFromLeft');
    }

    if (isInViewport(animateRight)) {
        animateRight.classList.add('animated', 'slideInFromRight');
    } else {
        animateRight.classList.remove('animated', 'slideInFromRight');
    }
}

// Event listener for scroll event
window.addEventListener('scroll', animateOnScroll);

// Initial check when the page loads
animateOnScroll();


function showBefore() {
    document.getElementById('before-tab').classList.add('active');
    document.getElementById('after-tab').classList.remove('active');
    document.getElementById('before-content').classList.remove('hidden');
    document.getElementById('after-content').classList.add('hidden');
}

function showAfter() {
    document.getElementById('before-tab').classList.remove('active');
    document.getElementById('after-tab').classList.add('active');
    document.getElementById('before-content').classList.add('hidden');
    document.getElementById('after-content').classList.remove('hidden');
}


</script>
</html>
