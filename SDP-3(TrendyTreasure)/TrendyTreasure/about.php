<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading"> 
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row" style="background-color: lightcyan;">

      <div class="image">
         <img src="images/11.png" alt="">
      </div>

      <div class="content">
         <h3>why Choose Us?</h3>
         <p>TrendyTreasure is your one-stop shop for stylish, practical, and affordable products tailored to students, doctors, lawyers, and corporate professionals. We prioritize quality, offer budget-friendly pricing, and ensure a seamless shopping experience. Trusted by professionals, our user-friendly platform and dedicated customer support make us the ultimate destination for all your needs. Discover the treasure you deserve with TrendyTreasure!</p>
         <a href="menu.php" class="btn frm1">Our Products</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p>Explore a wide range of products tailored to your needs and pick your perfect treasure effortlessly.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>We ensure quick and reliable delivery so your treasures reach you right on time.</p>
      </div>

      <div class="box">
         <img src="images/gift-box.png" alt="">
         <h3>Enjoy Treasure</h3>
         <p>Explore a wide range of products tailored to your needs and pick your perfect treasure effortlessly.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Customer's Reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/111.jpg" alt="">
            <p>I recently discovered TrendyTreasure, and it has been an amazing experience! The platform is user-friendly, and the variety of products caters to different professionals like students, doctors, lawyers, and corporate job holders.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Tanjim Hasan</h3>
         </div>

        
         <div class="swiper-slide slide">
            <img src="images/222.jpg" alt="">
            <p>My order arrived faster than expected, neatly packed.Super helpful and responsive!Slightly limited customization options, but nothing major.Overall, TrendyTreasure lives up to its name, offering trendy yet practical items. Highly recommend it to anyone looking for convenience and quality!.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Noboni Tasnim</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>