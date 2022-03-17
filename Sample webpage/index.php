<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>3 IDIOTS CINEMAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	*
	 {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}


/* Slideshow container */
.slideshow-container {
  max-width: 1300px;
  position: relative;
  left: 0;
  margin: auto;
  top:0.2rem;
}
img{
	position: relative;
  left: 0;
	width: 1300px;
	height: 500px;
 
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
	
  height: 5px;
  width: 5px;
  margin: 0 5px;
  background-color: white;
  border-radius: 60%;
  display: inline-block;
  transition: background-color 0.6s ease;
  position: relative;
  top: -50px;;
}

.active {
  background-color: black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


	
	
</head>
<body >
	
<nav>
<div class="navbar">
		<h1 class="header"> 3 IDIOTS CINEMAS</h1>
		<ul class="nav-items" >
			<li class="nav-item"><a href="#foot1">Contact Us</a> </li>
			<li class="nav-item"><a href="jos.php">Join With Us</a> </li>
			<li class="nav-item"><a href="today.php">Today's Movie</a> </li>
			<li class="nav-item"><a href="upm.php">UpComing Movies</a></li>
			<li class="nav-item"><a href="index.php">Home</a></li>
		</ul>
	</div>
	</nav>
	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="Images/index/1.jpg" >
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="Images/index/2.jpg" >
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="Images/index/3.jpg" >

</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="Images/index/4.jpg" >

</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="Images/index/5.jpg" >

</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="Images/index/10.jpg" >

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div>
<h3 class="heading-2">Facility</h3>
</div>
<div class="container">
<div class="leftpane">
  <h2 class="sub-heading-1" style="text-align: center;"> Food And Beverage</h2>
   
  <p class="desn" style="text-align: center;">We, offers a wide selection of short eats
    and beverages & also stored and
    under safe and hygienic conditions</p>
</div>
<div class="middlepane">
           
  <h2 class="sub-heading-1"  style="text-align: center;"> Online Tickets</h2>
  <p class="desn" style="text-align: center;">You can book tickets through online.</p>

</div>
<div class="rightpane">
           
  <h2 class="sub-heading-1"  style="text-align: center;"> Parking</h2>
  <p class="desn"  style="text-align: center;">We have one of the biggest
            car parking in the city with easy access from main roads</p>
</div>
</div> 
</br>
</br>
</br>
</br>
</br>
</br>
<div class="foot" id="foot1">
<p class="head1">CONTACT US</p>
<div class="footer">
<ul class="foot-a">
  <h4 style="text-align: center;">ADDRESS<h4>
    <li class="foot-align">3 IDIOTS CINEMAS</li><br>
    <li class="foot-align">30/7, INCEPTION STREET</li><br>
    <li class="foot-align">GOTHAM CITY</li><br>
    <li class="foot-align">NEW YORK</li>
  </ul>
  <ul class="foot-b">
  <h4>CONTACT<h4>
  <li class="foot-align">PHNO : +69 5472451836</li><br>
  <li class="foot-align">EMAIL:3idiots@gmail.com</li> 
  </ul>
</div>
</div>
<footer>All Right reserved rio~hari</footer>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

	
</body>
</html>
