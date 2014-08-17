<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link type="text/css" rel="stylesheet" href="clearfix.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
	<title>form</title>
</head>
<body>
	<form action="processAplication.php" method="post">
		<legend>Personal Information</legend>
		<div class="clearfix">
			<div class="left">
				<div class="block">
					<label for="full-name">Full Name:</label><p class="red">*</p>
					<input id="full-name" name="full_name" type="text" placeholder="Your Name Here">	
				</div>
				<div class="block">
					<label for="date-birth">Date of Birth:</label><p class="red">*</p>
					<input id="date-birth" name="date_birth" type="text">	
				</div>
				<div class="block">
					<label for="username">Usernam:</label><p class="red">*</p>
					<input id="username" name="user_name" type="text">	
				</div>
				<legend>Password</legend>
				<div class="block">
					<label for="password">Password:</label><p class="red">*</p>
					<input id="password" name="user_passwors" type="password">	
				</div>
				<legend>Address</legend>
				<div class="block">
					<label for="address">Adress:</label>
					<input id="address" name="user_address" type="text">	
				</div>
				<div class="block">
					<label for="state">Select a state:</label>
					<select id="state" name="user_state">
					</select>
				</div>
			</div>
			<div class="right">
				<div class="block">
					<label for="age">Age:</label><p class="red">*</p>
					<input id="age" name="user_age" type="text">	
				</div>
				<div class="block">
					<label for="date">Select Date:</label><p class="red">*</p>
						<div class="width-min">
							<input type="date" id="year" name="select_year" min="1981" max="2014">	
							<input type="date" id="month" name="select_month" min="January" max="December">
							<input type="date" id="day" name="select_day" min="01" max="31">
						</div>	
				</div>
				<div class="block">
					<label for="email-address">Email Address:</label><p class="red">*</p>
					<input type="text" id="email-address"  name="email_address">	
				</div>

				<div class="block margin-possition">
					<label for="confirm-password">Confirm Password:</label><p class="red">*</p>
					<input id="confirm-password" name="confirm_password" type="password">	
				</div>
				<div class="block">
					<label for="city">City/Suburb:</label>
					<input id="city" name="user_city" type="text">	
				</div>
				<div class="block">
					<label for="post-code">Post Code:</label><p class="red">*</p>
					<input id="post-code" name="post_code" type="text">	
				</div>

			</div>
		<div class="clearboth">
			<legend>Company Information</legend>
			<div class="clearfix">
				<div class="block width-adjust">
					<label for="company-name">Company Name:</label>
					<input id="company-name" name="company_name" type="text">
				</div>
				<div class="block width-adjust">
					<label for="company-phone">Company Phone:</labe>
					<input id="company-phone" type="text" name="company_phone">
				</div>
				<div class="block width-adjust">
					<label for="Number-of-employees">Number of Employees:</label>
					<input id="Number-of-employees" type="text" name="employees_number">
			</div>
		</div>
		<div class="middle">
			<legend>Performance</legend>
			<div class="clearfix">
				<div class="left">
					<p>How would you rate staff performance?:</p><p class="red">*</p>
					<div class="option">
						<label for="poor"><input id="poor" type="radio" name="performance">Poor</label>
					</div>
					<div class="option">
						<label for="improvement"><input id="improvement" type="radio" name="performance">Needs Improvement</label>
					</div>
					<div class="option">
						<label for="average"><input id="average" type="radio" name="performance">Average</label>
					</div>
					<div class="option">
						<label for="good"><input id="good" type="radio" name="performance">Good</label>
					</div>
					<div class="option">
						<label for="excellent"><input id="excellent" type="radio" name="performance">Excellent</label>
					</div>
				</div>
				<div class="right">
					<p>Select tour preferred two or three foods:</p><p class="red">*</p>
					<div class="option">
						<label for="cheese"><input id="cheese" type="checkbox" name="food1">Cheese</label>
					</div>
					<div class="option">
						<label for="grapes"><input id="grapes" type="checkbox" name="food2">Grapes</label>
					</div>
					<div class="option">
						<label for="salad"><input id="salad" type="checkbox" name="food3">Salad</label>
					</div>
					<div class="option">
						<label for="bread"><input id="bread" type="checkbox" name="food4">Bread</label>
					</div>
					<div class="option">
						<label for="chocolate"><input id="chocolate" type="checkbox" name="food5">Chocolate</label>	
					</div>
				</div>
			</div>
		</div>


	</form>		
</body>
</html>