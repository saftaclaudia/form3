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
		<div>
			<legend>Matrix/Group Eements</legend>
			<label>What food do you children like?</labe><p class="red">*</p>
			<table class="tr-height">
				<tr>
					<td class="none-border"></td>
					<td class="backgroud">Fish</td>
					<td class="backgroud">Beef</td>
					<td class="backgroud">Chicken</td>
					<td class="backgroud">Salad</td>
				</tr>
				<tr>
					<td class="backgroud">Child 1</td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
				</tr>
				<tr>
					<td class="backgroud">Child 2</td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
				</tr>
				<tr>
					<td class="backgroud">Child 3</td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
				</tr>
				<tr>
					<td class="backgroud">Child 4</td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
					<td><input type="checkbox" name="" id=""></td>
				</tr>
			</table>
			<label>How do you feel about us?:</labe><p class="red">*</p>
			<table class="tr-height">
				<tr>
					<td class="none-border"></td>
					<td class="backgroud">Very Satisfied</td>
					<td class="backgroud">Satisfied</td>
					<td class="backgroud">Somewhat Satisfied</td>
					<td class="backgroud">Not Satisfied</td>
				</tr>
				<tr>
					<td class="backgroud">Service Quality</td>
					<td><input type="radio" name="service" id="very_service"></td>
					<td><input type="radio" name="service" id="satisfied_service"></td>
					<td><input type="radio" name="service" id="somewhat_service"></td>
					<td><input type="radio" name="service" id="not_service"></td>
				</tr>
				<tr>
					<td class="backgroud">Overall Hygiene</td>
					<td><input type="radio" name="hygiene" id="very_hygiene"></td>
					<td><input type="radio" name="hygiene" id="satisfied_hyhiene"></td>
					<td><input type="radio" name="hygiene" id="somewhat_hygiene"></td>
					<td><input type="radio" name="hygiene" id="not_hygiene"></td>
				</tr>
				<tr>
					<td class="backgroud">Responsiveness</td>
					<td><input type="radio" name="responsiveness" id="very_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="satisfied_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="somewhat_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="not_responsiveness"></td>
				</tr>
				<tr>
					<td class="backgroud">Kidness and Helpfuness</td>
					<td><input type="radio" name="kidness" id="very_kidness"></td>
					<td><input type="radio" name="kidness" id="satisfied_kidness"></td>
					<td><input type="radio" name="kidness" id="somewhat_kidness"></td>
					<td><input type="radio" name="kidness" id="not_kidness"></td>
				</tr>
			</table>
			<label>List your favorite websites:</labe><p class="red">*</p>
			<table class="website">
				<tr class="tr-height">
					<td class="none-border"></td>
					<td class="backgroud">Site Name</td>
					<td class="backgroud">URL</td>
					<td class="backgroud">Speed</td>
					<td class="backgroud">Design</td>
				</tr>
				<tr>
					<td class="backgroud">Website #1</td>
					<td><input type="text" name="name1" id="name_1"></td>
					<td><input type="text" name="url1" id="url_1"></td>
					<td><input type="text" name="speed1" id="speed_1"></td>
					<td><input type="text" name="design1" id="design_1"></td>
				</tr>
				<tr>
					<td class="backgroud">Website #2</td>
					<td><input type="text" name="name2" id="name_2"></td>
					<td><input type="text" name="url2" id="url_2"></td>
					<td><input type="text" name="speed2" id="speed_2"></td>
					<td><input type="text" name="design2" id="design_2"></td>
				</tr>
				<tr>
					<td class="backgroud">Website #3</td>
					<td><input type="text" name="name3" id="name_3"></td>
					<td><input type="text" name="url3" id="url_3"></td>
					<td><input type="text" name="speed3" id="speed_3"></td>
					<td><input type="text" name="design3" id="design_3"></td>
				</tr>
				<tr>
					<td class="backgroud">Website #4</td>
					<td><input type="text" name="name4" id="name_4"></td>
					<td><input type="text" name="url4" id="url_4"></td>
					<td><input type="text" name="speed4" id="speed_4"></td>
					<td><input type="text" name="design4" id="design_4"></td>
				</tr>
			</table>
		</div>
		<div>
			<legend> Attach your Resume and Application</legend>
			<div class= "button">
				<label for="resume"> Resume (PDF, DOC or DOCX):<p class="red">*</p></label>
				<input type="button" id="resume" value="Chosee File" name="choose_resume">
				<p>No file chosen</p>
			</div>
			<div class="button">
				<label for="application"> Application</label>
				<input type="button" value="Choose File" id="application" name="chosee_application">
				<p>No file chosen</p>
			<div>
		</div>
		<div class="additional">
			<legend>Additional</legend>
			<label>Additional Comments:</label>
			<textarea placeholder="Here is an exemple of defalut multiline text. ---JsonFormBuilder---"></textarea>
		</div>
		<div class="agree">
			<label for="spam"><input id="spam" type="checkbox" name="spam_check">Sign me up for some spam:</label>
			<label for="spam"><input id="spam" type="checkbox" name="spam_check">I agree to the terms & conditions: <p class="red">*</p></label>
		</div>
		<input type="submit" value="Submit From" name="submit_form" class="submit">
	</form>		
</body>
</html>