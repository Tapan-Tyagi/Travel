<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });

          // "See More" functionality
          let offset = 12; // Starting point for loading more packages
          const limit = 4; // Number of packages to load each time

          $('.load-more .btn').on('click', function() {
              $.ajax({
                  url: 'load_more_packages.php', // URL to your backend script
                  type: 'GET',
                  data: { offset: offset, limit: limit }, // Send offset and limit
                  success: function(response) {
                      if (response) {
                          $('.box-container').append(response); // Append new packages
                          offset += limit; // Update the offset for the next request
                      } else {
                          $('.load-more').hide(); // Hide button if no more packages
                      }
                  },
                  error: function() {
                      alert('Error loading more packages.'); // Error handling
                  }
              });
          });
      });

      function alertAndRedirect() {
          alert("You need to log in to book a package.");
          window.location.href = "login.php"; // Redirect to login page
      }
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/P.jpg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <?php if (isset($_SESSION['user_id'])): ?>
          <a href="book.php">book</a>
      <?php endif; ?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->
<section class="packages">
   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Dubai top selling packages!</p>
            <h2>Rs 10,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Delhi Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
            <h2>Rs 9,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>Rs 11,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia Tour Packages</ ```php
            <h3>Australia Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Australia top selling packages!</p>
            <h2>Rs 13,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>China Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our China top selling packages!</p>
            <h2>Rs 7,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Singapore Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Singapore top selling packages!</p>
            <h2>Rs 12,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Spain Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Spain top selling packages!</p>
            <h2>Rs 18,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Canada Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Canada top selling packages!</p>
            <h2>Rs 21,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bali Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Bali top selling packages!</p>
            <h2>Rs 14,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Nepal Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Nepal top selling packages!</p>
            <h2>Rs 7,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bangladesh Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Bangladesh top selling packages!</p>
            <h2>Rs 5,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Japan Tour Packages</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
            <h2>Rs 11,900</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="book.php" class="btn">book now</a>
            <?php else: ?>
                <a href="#" class="btn" onclick="alertAndRedirect()">book now</a>
            <?php endif; ?>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>
<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <?php if (isset($_SESSION['user_id'])): ?>
             <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         <?php endif; ?>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sagorcse38@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> dhaka, Bangladesh - 1215  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>mr.*********</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>