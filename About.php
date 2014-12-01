<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kuzines Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  	<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>  
	  	<!-- <link type="text/css" rel="stylesheet" href="css/formstyle2.css"> -->
	  	<link type="text/css" rel="stylesheet" href="css/formstyle.css">

	  	<script type="text/javascript" src = "js/form.js"></script>
	  	<script type="text/javascript" src = "js/clock.js"></script>
	  	<script type="text/javascript" src = "js/birthdate.js"></script>
	    <script type="text/javascript" src = "js/onchange.js"></script>	
	</head>
	<body>
		<?php
        	$fName = basename("About.php");
        	include("header.php");
        ?>
        <br>
<!--         <div class="leftspace"></div> -->
	    <div class="aboutHeader">
	        <div class = "Kuzines">
	        	About Kuzines
	        </div>
<!-- 	        <div col-md-12 col-md-offset-1>
	        	<a href="image/insidebuilding.jpg"><img src="image/insidebuilding.jpg" alt ="Picture of inside of a building"></a>
			</div> -->
		</div>
		<br>
		<div class="article-body col-md-4 col-md-offset-4">
			<div class="article-section1">
				<p>
					We are a tech company focused on improving your dining experience.
				</p>
			</div>
			<div class="article-section2">
				<p>
					Compare restaurants nearby your place by reading reviews from previous customers.
				</p>
				<p>
					Our website and mobile app enable you to easily compare tens and hundreds of restaurants nearby you. You can also leave your review of restaurants based on your dining experience.
				</p>
			</div>
		</div>


		<div class="col-xs-12">
			<hr>
			<div class="follow col-md-4 col-md-offset-4">
				<p>
					Follow Us:
				</p>
				<br>
			</div>
		</div>


		<div class="logo">
			<div class="column">
				<div class="SocialMediaLogo col-md-3 col-md-offset-2">
					<a href="https://www.facebook.com/kuzinesapp?ref=br_tf" ><img src="image/facebook29.png" alt="Facebook logo"></a>
					<a href="https://www.facebook.com/kuzinesapp?ref=br_tf" >Facebook</a>
				</div>
				
				<div class="SocialMediaLogo col-md-3">
					<a href="https://www.linkedin.com/company/3287243?trk=tyah&trkInfo=tarId%3A1417193425999%2Ctas%3Akuzines%2Cidx%3A1-1-1" ><img src="image/linkedin12.png" alt="LinkedIn logo"></a>
					<a href="https://www.linkedin.com/company/3287243?trk=tyah&trkInfo=tarId%3A1417193425999%2Ctas%3Akuzines%2Cidx%3A1-1-1" >LinkedIn</a>
				</div>

				<div class="SocialMediaLogo col-md-3">
					<a href="https://twitter.com/KuzinesApp" ><img src="image/social19.png" alt="Twitter logo"></a>
					<a href="https://twitter.com/KuzinesApp" >Twitter</a>
				</div>
       		</div>
        </div>



	</body>

	<footer>
        <?php
        include("footer.php");
        ?>
	</footer>
</html>