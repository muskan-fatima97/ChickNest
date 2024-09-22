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
    <title>Blog</title>

<style>
 .container {
  margin-bottom: 30px;
}


.card {
  width: 350px;
  height: 290px; /* Set height for the card */
  background-color: #f0f0f0;
 /* Add padding to create space between content and border */
  box-sizing: border-box;
  position: relative; /* Add positioning context */
  border-radius: 10px; /* Rounded corners */
  overflow: hidden; /* Hide overflow content */
}
.medium{
    gap: 120px;
    margin-bottom: 50px;
}
.h1-recent{
    margin-bottom: 50px;
}
.card img {
  width: 100%; /* Make the image width fill the container */
  height: 100%; /* Set height for the image */
  display: block; /* Ensure block-level display */
  position: absolute; /* Position the image absolutely */
  top: 0; /* Align to the top of the card */
  left: 0; /* Align to the left of the card */
  border-radius: 10px; /* Rounded corners for the image */
  transition: transform 0.3s ease; /* Add transition effect */
}

.card:hover img {
  transform: translateY(-100%); /* Slide image up on hover */
}

.text {
  position: absolute; /* Position the text absolutely */
  bottom: 0; /* Align text to the bottom of the card */
  left: 0; /* Align text to the left of the card */
  width: 100%; /* Set text width to fill the container */
  padding: 20px; /* Add padding for text */
  box-sizing: border-box; /* Include padding in the total width */
  background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background color */
  color: white; /* Text color */
  transition: transform 0.3s ease; /* Add transition effect */
}

.card:hover .text {
  transform: translateY(-100%); /* Slide text up on hover */
}

.carousel-content {
            position: relative;
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
        }
        .carousel-caption h2 {
            margin: 0;
            padding: 0;
        }
        .carousel-caption hr {
            width: 150px;
            height: 3px;
            border-width: 2px;
            border-color: white;
            background-color: white;
            color: white;
            margin: 0 auto;
        }
        .carousel-caption h1 {
            margin-top: 10px;
        }
        .carousel-caption p {
            margin: 10px 0;
        }
        .btn-read {
            background-color: white;
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

</style>

</head>
<body>

  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ChickNest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex"> 
          <form class="form-inline d-flex gap-1">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success btn-success my-2 my-sm-0 " type="submit">Search</button>
          </form>
      </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="blog.php">BLOG HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown1" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">HOW IT WORKS</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item" href="index.php">Details</a></li>
                      <li><a class="dropdown-item" href="3D_Difference.php">The ChickNest 3D Difference</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">PORTFOLIO</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="portfolio.php">Living Room Design ideas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a href="style quiz.php" class="btn">FIND YOUR STYLE</a>
              </li>
            </ul>
        </div>
        
    </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-content">
                <img src="img/blog-bg-1.webp" class="d-block w-100" style="object-fit: cover; height: 700px; filter: brightness(40%);">
                <div class="carousel-caption text-center">
                    <h2>Featured Story</h2>
                    <hr>
                    <h1>Affordable Interior Designs</h1>
                    <p>Tips for Stunning Styles on Budget</p>
                    <button class="btn btn-read">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <img src="img/blog-bg-2.webp" class="d-block w-100" style="object-fit: cover; height: 700px; filter: brightness(40%);">
                <div class="carousel-caption text-center">
                    <h2>Featured Story</h2>
                    <hr>
                    <h1>Affordable Interior Designs</h1>
                    <p>Tips for Stunning Styles on Budget</p>
                    <button class="btn btn-read">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <img src="img/blog-bg-3.webp" class="d-block w-100" style="object-fit: cover; height: 700px; filter: brightness(40%);">
                <div class="carousel-caption text-center">
                    <h2>Featured Story</h2>
                    <hr>
                    <h1>Affordable Interior Designs</h1>
                    <p>Tips for Stunning Styles on Budget</p>
                    <button class="btn btn-read">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <img src="img/blog-bg-4.webp" class="d-block w-100" style="object-fit: cover; height: 700px; filter: brightness(40%);">
                <div class="carousel-caption text-center">
                    <h2>Featured Story</h2>
                    <hr>
                    <h1>Affordable Interior Designs</h1>
                    <p>Tips for Stunning Styles on Budget</p>
                    <button class="btn btn-read">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-content">
                <img src="img/blog-bg-5.webp" class="d-block w-100" style="object-fit: cover; height: 700px; filter: brightness(40%);">
                <div class="carousel-caption text-center">
                    <h2>Featured Story</h2>
                    <hr>
                    <h1>Affordable Interior Designs</h1>
                    <p>Tips for Stunning Styles on Budget</p>
                    <button class="btn btn-read">READ MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
<div class="main-container text-center" style="margin-top:100px; ">
        <h1 class="h1-recent" id="typing-animation">Recent Stories</h1>
    </div>
    <div class="container" style="margin-bottom:100px;">
        <div class="row medium" id="posts-container">
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



        $(document).ready(function() {
    function loadPosts() {
        $.ajax({
            url: 'fetch_blogs.php',
            method: 'GET',
            success: function(data) {
                $('#posts-container').html(data);
            },
            error: function(xhr, status, error) {
                console.error("An error occurred: " + status + " " + error);
            }
        });
    }

    loadPosts();
});

 </script>

</html>