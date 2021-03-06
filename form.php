<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Kuzines Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Bootstrap-->
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
            $fName = basename("form.php");
            include("header.php");
        ?>

	  	<div class="container">
		  	<div id = "content">
				<form method="POST" action="process.php" onsubmit = "return validate(this)">	
					<div class="formtitle">
						<h1>KUZINES</h1>
					</div>
				<fieldset>					
						<h2>Edit your profile!</h2>
						<h3>General information:</h3>
					<div class="col-xs-9">
						<div class="col-xs-12 col-sm-6">
							<label for="first_name">First name</label>
								<input type="text" id="first_name" name="first_name" placeholder="Jason" required  >
								<div class = "error"></div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label for="last_name">Last name</label>
								<input type="text" id="last_name" name="last_name" placeholder="Smith" required >
								<div class = "error"></div>
						</div>
					</div>
						<br>
						<br>
					<div class="col-xs-9">
						<div class="col-xs-12 col-sm-6">	
							<label for="email_address">Email address</label>
								<input type="email" id="email_address" name="email_address" placeholder="jasonsmith@gmail.com" required >
								<div class = "error"></div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<label for="email_confirm">Confirm email address</label>
								<input type="email" id="email_confirm" name="email_confirm" required >
								<div class = "error"></div>
						</div>
					</div>
						<br>
						<br>
						<br>
					<div class="col-xs-9">
						<div class="col-xs-12 col-sm-6">
						<label for="password_requirement">Password</label>
							<input type="password" id="password_requirement" name="password_requirement" placeholder="min 8 char w/ a-z,A-Z,0-9" required>
							<div class="error"></div>
						</div>
						<div class="col-xs-12 col-sm-6">
						<label for="password">Confirm password</label>
							<input type="password" id="password" name="password" required >
							<div class="error"></div>
						</div>
					</div>
					<div class="col-xs-9">
					<div class="col-xs-12">
						<label for="Nickname">Nickname / UserName</label>
							<input type="text" id="Nickname" name="Nickname" placeholder="BigJay" required >
							<div class="error"></div>	
					</div>
						<br>
					<div class="col-xs-12">
						<label for = "months">Month, </label><label for ="days">date, </label><label for="years">year of birth</label>
							<br>
								<select class = "rebel" id ="months" name = "mm" onchange = "" size ="1"></select>
								<select class = "rebel" id ="days" name = "dd" onchange = "" size ="1"></select>
								<select class = "rebel" id ="years" name = "yyyy" onchange = "" size = "1"></select>
					</div>
						<br>
					<div class="col-xs-12">
						Sex
						<label for = "male">:
								<input class="rebel" id = "male" type="radio" name="sex" value="male" checked>Male
						</label>			
						<label for = "female">
							<input class="rebel" id = "female" type="radio" name="sex" value="female">Female
						</label>
						<br>
					</div>
					<div class="col-xs-12">
						<label for="city">City</label>
							<input type="text" id="city" name="city" placeholder="Ann Arbor" required>
							<div class="error"></div>	
					</div>
					<div class="col-xs-12">
						<label for="state">State
							<select id = "state">
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>
						</label>
					</div>
					<div class = "col-xs-12">
						<label for="zipcode">Zip code</label>
							<input type="text" id="zipcode" name="zipcode" placeholder="48104" required >
							<div class="error"></div>	
					</div>
						<br>
					<div class = "col-xs-12">
						<br>
						<p>
			  				<input class="button" type="submit" value="Submit form" onclick="validate(form)"/>
						</p>
					</div>
				</div>
				</fieldset>
				</form>
			</div>
		</div>
  	</body>

  	<footer>
        <?php
        include("footer.php");
        ?>
	</footer>
	
</html>