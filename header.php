<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Guitar Buddy!</title>

<!-- for music js scripts -->

<script src="js/music.js"></script>

<!-- for style sheets -->


<!-- main ss  -->
<link rel="stylesheet" href="css/reset.css" type="text/css" />

<link rel="stylesheet" href="css/main.css" type="text/css" />

<link rel="stylesheet" href="css/nav.css" type="text/css" />

<link rel="stylesheet" href="css/strings.css" type="text/css" />

<link rel="stylesheet" href="css/navtoph.css" type="text/css" />

<link rel="stylesheet" href="css/circles.css" type="text/css" />


<body>


<!--  top header section -->

<section id = "topheader" class = "navbox">

<img   class="floatL"  src="images/gb50.png" alt="Guitar Buddy"  />


<ul class="main1"   class="floatL">

	
	<li><a  href="index.php">Home</a></li>
	

	<li><a href="imagine.php">Imagine</a>


		<ul>
		<?php include 'imaginelis.php'; ?>
		</ul>

	</li>
	
		
	<li><a href="try.php">Try</a>


		<ul>
		<?php include 'trylis.php'; ?>
		</ul>

	</li>
	
	
	
	
	<li><a href="shop.php">Shop</a>


		<ul>
		<?php include 'shoplis.php'; ?>
		</ul>

	</li>
	
		
	
	
	<li><a href="learn.php">Learn</a>


		<ul>
		<?php include 'learnlis.php'; ?>
		</ul>

	</li>
	
	
	<li><a href="share.php">Share</a>


		<ul>
		<?php include 'sharelis.php'; ?>
		</ul>

	</li>
	
	
	<li><a href="more.php">More</a>


		<ul>
		<?php include 'morelis.php'; ?>
		</ul>

	</li>
	
	
	
	

	<li ><a  class="floatR"  href="login.php">Login</a></li>

	<li ><a class="floatR" href="feedback.php">Feedback</a></li>

	<li ><a class="floatR" href="contact.php">Contact</a></li>

	</ul>


</section>

<!-- end of top header section -->
