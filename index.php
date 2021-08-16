<?php 
	
	require 'includes\common.php';

	if (isset($_SESSION['Email'])) {
 	header('location: prod.php');
	}

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<?php
 include 'includes\header.php';
 ?>

<div class="content">
<div class="banner-image"><div class="inner-banner-image">
	<div class="banner-content"><h1>We sell lifestyle.</h1><br>
<p>Flat 40% OFF on premium brands</p><br><br>
<button><a href="prod.php" style="color: white; text-underline-position: none;"> Shop Now </a></button>
</div></div></div></div>
<div class="container">
	<div class="item"> <a href="prod.php" style="text-decoration: none;" >
<img src="camera.jpg" class="thumbnail"> <div class="caption">
<h2>Cameras</h2>
<p>Choose among the best available in the world.</p></div></a></div>
<div class="item"> <a href="prod.php" style="text-decoration: none;">
	<img src="watch.jpg" class="thumbnail">
<div class="caption"> 
<h2>Watches</h2>
<p>Original watches from the best brands.</p></div></a></div>

<div class="item"> <a href="prod.php" style="text-decoration: none;"><img src="shirt.jpg" class="thumbnail">
	<div class="caption"> 
<h2>Shirts</h2>
<p>Our exquisite colletions of shirt</p> </div></a>
</div>
 </div>
 <?php
 include 'includes\footer.php';
 ?>
</body>
</html>