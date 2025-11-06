<?php

include 'components/connect.php';



if (isset($_COOKIE['user_id'])) {
  $user_id = $_COOKIE['user_id'];
} else {
  $user_id = '';
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- box icon cdn link  -->
   	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   	
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!------------------------bootstrap css link------------------------------->
    <!------------------------slick slider link------------------------------->
    <link rel="stylesheet" type="text/css" href="slick.css" />
   	<link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
	<title>Bedesk Londan Fashion Website Template</title>
</head>
<body>
	

<?php include 'components/user_header.php'; ?>




<div class="container-fluid">
  <div class="hero-slider">
    <div class="slider-item">
      <img src="image/home-slide.jpg">
      <div class="slider-caption">
        <h1>Street style has its<br>own rules</h1>
        <p>Lorem ipsum dolor sit amet, consectetur 
			<br> adipisicing elit, sed do eiusmod laborum.Lorem ipsum dolor sit amet,
		    <br> consectetur adipisicing elit, sed do eiusmod laborum
		</p>
		<a href="shop.php" class="btn">shop now</a>
      </div>
    </div>
	<div class="slider-item">
      <img src="image/home-slide0.jpg">
      <div class="slider-caption">
        <h1>brand and Disiger<br>Features</h1>
        <p>Lorem ipsum dolor sit amet, consectetur 
			<br> adipisicing elit, sed do eiusmod laborum.Lorem ipsum dolor sit amet,
		    <br> consectetur adipisicing elit, sed do eiusmod laborum
		</p>
		<a href="shop.php" class="btn">shop now</a>
      </div>
    </div>
	<div class="slider-item">
      <img src="image/home-slide1.jpg">
      <div class="slider-caption">
        <h1>Street style has its<br>own rules</h1>
        <p>Lorem ipsum dolor sit amet, consectetur 
			<br> adipisicing elit, sed do eiusmod laborum.Lorem ipsum dolor sit amet,
		    <br> consectetur adipisicing elit, sed do eiusmod laborum
		</p>
		<a href="shop.php" class="btn">shop now</a>
      </div>
    </div>
	<div class="slider-item">
      <img src="image/home-slide2.jpg">
      <div class="slider-caption">
        <h1>Final Clearance<br>Sele</h1>
        <p>Lorem ipsum dolor sit amet, consectetur 
			<br> adipisicing elit, sed do eiusmod laborum.Lorem ipsum dolor sit amet,
		    <br> consectetur adipisicing elit, sed do eiusmod laborum
		</p>
		<a href="shop.php" class="btn">shop now</a>
      </div>
    </div>
	<div class="controls">
		<i class="bx bx-left-arrow-alt prev"></i>
		<i class="bx bx-right-arrow-alt next"></i>
	</div>
  </div>
</div>

<div class="services">
  <div class="box-container">
    <!-- Service 1 -->
    <div class="box">
      <div class="icon">
        <img src="image/service.png" alt="Online Shopping Icon">
      </div>
      <div class="detail">
        <h4>Online Shopping</h4>
        <span>100% Secure</span>
      </div>
    </div>

    <!-- Service 2 -->
    <div class="box">
      <div class="icon">
        <img src="image/services2.png" alt="Quality Products Icon">
      </div>
      <div class="detail">
        <h4>Quality Products</h4>
        <span>100% Secure</span>
      </div>
    </div>

    <!-- Service 3 -->
    <div class="box">
      <div class="icon">
        <img src="image/services.png" alt="Delivery Icon">
      </div>
      <div class="detail">
        <h4>Delivery</h4>
        <span>24 * 7 Hours</span>
      </div>
    </div>

    <!-- Service 4 -->
    <div class="box">
      <div class="icon">
        <img src="image/services0.png" alt="Customer Services Icon">
      </div>
      <div class="detail">
        <h4>Customer Services</h4>
        <span>Support Gift Services</span>
      </div>
    </div>

    <!-- Service 5 -->
    <div class="box">
      <div class="icon">
        <img src="image/services1.png" alt="Well Organized Icon">
      </div>
      <div class="detail">
        <h4>Well Organized</h4>
        <span>24 * 7 Free Returns</span>
      </div>
    </div>

    <!-- Service 6 -->
    <div class="box">
      <div class="icon">
        <img src="image/services1.png" alt="Much More Icon">
      </div>
      <div class="detail">
        <h4>Much More</h4>
        <span>100% Secure</span>
      </div>
    </div>
  </div>
</div>

<img src="image/sub-banner.jpg" class="sub-banner">

<div class="frame-container">
  <div class="box-container">
    <!-- Frame Section -->
    <div class="frame">
      <div class="detail">
        <span>Shop Seasonal</span>
        <h2>50% Off</h2>
        <h1>All Seasonal Fashion</h1>
        <a href="shop.php" class="btn">Shop Now</a>
      </div>
    </div>

    <!-- Box Section 1 -->
    <div class="box">
      <div class="box-detail">
        <img src="image/lookbook4.jpg" class="img" alt="Fresh Latest Collections">
        <div class="img-detail">
          <span>Wide Range</span>
          <h1>Fresh Latest Collections</h1>
          <a href="shop.php" class="btn">Shop Now</a>
        </div>
      </div>
    </div>

    <!-- Box Section 2 -->
    <div class="box">
      <div class="box-detail">
        <img src="image/lookbook5.jpg" class="img" alt="Fresh Latest Collections">
        <div class="img-detail">
          <span>Wide Range</span>
          <h1>Fresh Latest Collections</h1>
          <a href="shop.php" class="btn">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about-us">
  <div class="box-container">
    <div class="img-box"></div>
    <div class="box">
      <div class="heading">
        <span>why choose us</span>
        <h1>why Bedsek london fashion website</h1>
        <img src="image/separator.png">
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, fuga?
      Maiores, sapiente odit! Corporis necessitatibus earum perspiciatis ab
      laudantium quisquam fuga sequi sit iure minus, eaque eos. Corrupti, veritatis
      culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta saepe
      ipsam illo. Mollitia quisquam nam magnam sint reiciendis harum id saepe,
      expedita ipsa assumenda, aperiam reprehenderit odio tempora possimus molestias</p>
      <a href="about.php" class="btn">know more</a>
      <a href="contact.php" class="btn">contact us</a>
    </div>
  </div>
</div>

<div class="sub-banner">
  <div class="box-container">
    <img src="image/sub-banner1.jpg">
    <img src="image/sub-banner.jpg" height="85%">
  </div>
</div>


<div class="categories">
  <div class="heading">
    <h1>shop by categories</h1>
  </div>
  <div class="box-container">
    <div class="box">
      <img src="image/cat.webp">
    </div>
	<div class="box">
      <img src="image/cat0.webp">
    </div>
	<div class="box">
      <img src="image/cat1.png">
    </div>
	<div class="box">
      <img src="image/cat2.webp">
    </div>
	<div class="box">
      <img src="image/cat3.webp">
    </div>
	<div class="box">
      <img src="image/cat4.webp">
    </div>
	<div class="box">
      <img src="image/cat5.webp">
    </div>
	<div class="box">
      <img src="image/cat6.webp">
    </div>
	<div class="box">
      <img src="image/cat7.webp">
    </div>
	<div class="box">
      <img src="image/cat8.avif">
    </div>
  </div>
</div>

<div class="sub-banner">
  <img src="image/sub-banner2.jpg">
  <img src="image/sub-banner3.jpg" style="margin-top: -.4rem;">
</div>
<div class="frame-container-2">
  <div class="frame">
    <div class="detail">
      <span>shop seasonal</span>
      <h2>50% off</h2>
      <h1>all seasonl fashion</h1>
      <a href="shop.php" class="btn">shop now</a>
    </div>
  </div>
  <div class="box">
    <img src="image/sub-banner4.jpg">
  </div>
</div>

<div class="sub-banner">
  <img src="image/sub-banner5.jpg">
</div>

<div class="gurantee">
<div class="heading">
<h1>our gurantee</h1>
<p>Integer quis tempor orci. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <img src="image/separator.png">
    </div>
     <div class="box-container con">
     <img src="image/sale3.webp">
     <img src="image/sale4.jpg">
     <img src="image/sale7.jpg">
     <img src="image/sale6.jpg">
</div>
</div>

<div class="offer-1">
  <div class="detail">
    <h1>
      Special discount for all <br> latest fashion products
    </h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div class="container">
      <div id="countdown" style="color:#fff;">
		<ul>
			<li><span id="days"></span>days</li>
			<li><span id="hours"></span>hours</li>
			<li><span id="minutes"></span>minutes</li>
			<li><span id="seconds"></span>seconds</li>
		</ul>
      </div>
    </div>
	<a href="shop.php" class="btu">shop now</a>
  </div>
</div>

<div class="products"></div>
<div class="heading">
	<h1>our latest collection</h1>
</div>
<div class="offer-2">
  <div class="detail">
    <h1>We Pride Ourselves On <br> Exceptional fashion design.</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="shop.php" class="btn">shop now</a>
  </div>
</div>

<div class="gurantee">
<div class="heading">
<h1>our gurantee</h1>
<p>Integer quis tempor orci. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
    <img src="image/separator.png">
    </div>
     <div class="box-container con">
     <img src="image/sale.webp">
     <img src="image/sale0.webp">
     <img src="image/sale1.webp">
     <img src="image/sale2.webp">
</div>
</div>


















<?php include 'components/user_footer.php'; ?>


	<!-- sweetalert cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<!-- custom js link  -->
	<script src="jquary.js"></script>
    <script src="slick.js"></script>

    <script type="text/javascript">
        <?php include 'script.js' ?>
    </script>
	<!-- alert  -->
	<?php include 'components/alert.php'; ?>
</body>
</html>