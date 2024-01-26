<?php
    $customerName = $_POST["name"];
    $customerlname = $_POST["lname"];
    $subject = $_POST["subject"];
    $customerMsg = $_POST["msg"];
    $customerEmail = $_POST["email"];

    $to = "danielizaaks555@gmail.com";

    $message = "
        <html>
        <head>
        <title>Message Daniel Izaaks website</title>
        </head>
        <body>".
        "<br><br><h3>Sender Firstname: ". $customerName."</h3>".
        "<br><h3>Sender Lastname: ".$customerlname."</h3>".
        "<br><h3>Sender Email: ". $customerEmail."</h3>".
        "<br><h3>Sender Message: ".$customerMsg."</h3>";

                    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daniel Izaaks | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

  </head>
  <body>
    
    <div class="fh5co-loader"></div>
    
    <div id="page">
      <nav class="fh5co-nav" role="navigation">
	<div class="top">
	  <div class="container">
	    <div class="row">
	      <div class="col-xs-12 text-right">
		<p class="num">Call: 081 221 6712</p>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="top-menu">
	  <div class="container">
	    <div class="row">
	      <div class="col-xs-3">
		<div id="fh5co-logo"><a href="index.html">Daniel<span>Izaaks.</span></a></div>
	      </div>
	      <div class="col-xs-9 text-right menu-1">
		<ul>
                  <li><a href="index.html">Home</a></li>
		  <li><a href="work.html">Work</a></li>
		  <li><a href="about.html">About</a></li>
		  <li class="btn-cta active"><a href="contact.html"><span>Contact</span></a></li>
		</ul>
	      </div>
	    </div>
	    
	  </div>
	</div>
      </nav>

      <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/wood.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row">
	    <div class="col-md-8">
	      <div class="display-t">
		<div class="display-tc animate-box" data-animate-effect="fadeIn">
		  <h1>Contact Us</h1>
		</div>
	      </div>
	    </div>
	  </div>
	</div>
      </header>
      
      <div id="fh5co-contact">
	<div class="container">
	  <div class="row">
	    <div class="col-md-5 col-md-push-1 animate-box">
	      
	      <div class="fh5co-contact-info">
		<h3>Contact Information</h3>
		<ul>
		  <li class="address">ERF 818 Block A, <br>Rehoboth</li>
		  <li class="phone"><a href="tel://0812216712">081 221 6712</a></li>
		  <li class="email"><a href="mailto:danielizaaks555@gmail.com">danielizaaks555@gmail.com</a></li>
		  <li class="url"><a href="https://danielizaaks.com">www.danielizaaks.com</a></li>
		</ul>
	      </div>

	    </div>
	    <div class="col-md-6 animate-box">
	      <h3>Your message has been sent, we will get back to you shortly 😃</h3>			
	    </div>
	  </div>
	</div>
      </div>


      <footer id="fh5co-footer" role="contentinfo">
	<div class="container">
	  <div class="row copyright">
	    <div class="col-md-12 text-center">
	      <p>
		<small class="block">&copy; 2018 Daniel Izaaks</small>
		<small class="block">Designed by <a href="https://www.afri-isp.net/" target="_blank">INTERNET (PTY) Ltd. AFRICAN SERVICE PROVIDER</a></small>
	      </p>
	    </div>
	  </div>

	</div>
      </footer>
    </div>

    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

  </body>
</html>

