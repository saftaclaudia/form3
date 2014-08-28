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
			<div class="half">
				<div class="block">
					<label for="full-name">Full Name:<p class="red">*</p></label>
					<input id="full-name" name="full_name" type="text" placeholder="Your Name Here">	
				</div>
				<div class="block">
					<label for="date-birth">Date of Birth:<p class="red">*</p></label>
					<input id="date-birth" name="date_birth" type="text">	
				</div>
				<div class="block">
					<label for="username">Usernam:<p class="red">*</p></label>
					<input id="username" name="user_name" type="text">	
				</div>
				<legend>Password</legend>
				<div class="block">
					<label for="password">Password:<p class="red">*</p></label>
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
						<option value="1" selected>Please select...</option>
						<option value="2">USA</option>
						<option value="3">England</option>
						<option value="4">Frace</option>
					</select>
				</div>
			</div>
			<div class="half">
				<div class="block">
					<label for="age">Age:<p class="red">*</p></label>
					<input id="age" name="user_age" type="text">	
				</div>
				<div class="data block">
					<label for="date">Select Date:<p class="red">*</p></label>
						<div class="clearfix">
							<div class="width10">
								<select  id="year" name="year">
									<option value="1" selected>---</option>
									<option value="2">2013</option>
									<option value="3">2014</option>
								</select>
							</div>
							<div class="width20">
								<select  id="month" name="month">
									<option value="1" selected>January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
							<div class="width10">
								<select id="day" name="day">
									<option value="1" selected>1st</option>
									<option value="2" >2nd</option>
									<option value="3" >3</option>
									<option value="4" >4</option>
									<option value="5" >5</option>
									<option value="6" >6</option>
									<option value="7" >7</option>
									<option value="8" >8</option>
									<option value="9" >9</option>
									<option value="10" >10</option>
									<option value="11" >11</option>
									<option value="12" >12</option>
									<option value="13" >13</option>
									<option value="14" >14</option>
									<option value="15" >15</option>
									<option value="16" >16</option>
									<option value="17" >17</option>
									<option value="18" >18</option>
									<option value="19" >19</option>
									<option value="20" >20</option>
									<option value="21" >21</option>
									<option value="22" >22</option>
									<option value="23" >23</option>
									<option value="24" >24</option>
									<option value="25" >25</option>
									<option value="26" >26</option>
									<option value="27" >27</option>
									<option value="28" >28</option>
									<option value="29" >29</option>
									<option value="30" >30</option>
									<option value="31" >31</option>
								</select>
							</div>
						</div>	
				</div>
				<div class="block clearboth">
					<label for="email-address">Email Address:<p class="red">*</p></label>
					<input type="text" id="email-address"  name="email_address">	
				</div>

				<div class="block margin-possition">
					<label for="confirm-password">Confirm Password:<p class="red">*</p></label>
					<input id="confirm-password" name="confirm_password" type="password">	
				</div>
				<div class="block">
					<label for="city">City/Suburb:</label>
					<input id="city" name="user_city" type="text">	
				</div>
				<div class="block">
					<label for="post-code">Post Code:<p class="red">*</p></label>
					<input id="post-code" name="post_code" type="text">	
				</div>
			</div>
		<div class="clearboth">
			<legend>Company Information</legend>
			<div class="clearfix width32">
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
					<th class="none-border"></th>
					<th>Fish</th>
					<th>Beef</th>
					<th>Chicken</th>
					<th>Salad</th>
				</tr>
				<tr>
					<th>Child 1</th>
					<td><input type="checkbox" name="fish1" id="fish1"></td>
					<td><input type="checkbox" name="beef1" id="beef1"></td>
					<td><input type="checkbox" name="chichen1" id="chichen1"></td>
					<td><input type="checkbox" name="salad1" id="salad1"></td>
				</tr>
				<tr>
					<th>Child 2</th>
					<td><input type="checkbox" name="fish2" id="fish2"></td>
					<td><input type="checkbox" name="beef2" id="beef2"></td>
					<td><input type="checkbox" name="chichen2" id="chichen2"></td>
					<td><input type="checkbox" name="salad2" id="salad2"></td>
				</tr>
				<tr>
					<th>Child 3</th>
					<td><input type="checkbox" name="fish3" id="fish3"></td>
					<td><input type="checkbox" name="beef3" id="beef3"></td>
					<td><input type="checkbox" name="chichen3" id="chichen3"></td>
					<td><input type="checkbox" name="salad3" id="salad3"></td>
				</tr>
				<tr>
					<th>Child 4</th>
					<td><input type="checkbox" name="sish4" id="fish4"></td>
					<td><input type="checkbox" name="beef4" id="beef4"></td>
					<td><input type="checkbox" name="chichen4" id="chichen4"></td>
					<td><input type="checkbox" name="salad4" id="salad4"></td>
				</tr>
			</table>
			<label>How do you feel about us?:</labe><p class="red">*</p>
			<table class="tr-height">
				<tr>
					<th class="none-border"></th>
					<th>Very Satisfied</th>
					<th>Satisfied</th>
					<th>Somewhat Satisfied</th>
					<th>Not Satisfied</th>
				</tr>
				<tr>
					<th>Service Quality</th>
					<td><input type="radio" name="service" id="very_service"></td>
					<td><input type="radio" name="service" id="satisfied_service"></td>
					<td><input type="radio" name="service" id="somewhat_service"></td>
					<td><input type="radio" name="service" id="not_service"></td>
				</tr>
				<tr>
					<th>Overall Hygiene</th>
					<td><input type="radio" name="hygiene" id="very_hygiene"></td>
					<td><input type="radio" name="hygiene" id="satisfied_hyhiene"></td>
					<td><input type="radio" name="hygiene" id="somewhat_hygiene"></td>
					<td><input type="radio" name="hygiene" id="not_hygiene"></td>
				</tr>
				<tr>
					<th>Responsiveness</th>
					<td><input type="radio" name="responsiveness" id="very_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="satisfied_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="somewhat_responsiveness"></td>
					<td><input type="radio" name="responsiveness" id="not_responsiveness"></td>
				</tr>
				<tr>
					<th>Kidness and Helpfuness</th>
					<td><input type="radio" name="kidness" id="very_kidness"></td>
					<td><input type="radio" name="kidness" id="satisfied_kidness"></td>
					<td><input type="radio" name="kidness" id="somewhat_kidness"></td>
					<td><input type="radio" name="kidness" id="not_kidness"></td>
				</tr>
			</table>
			<label>List your favorite websites:</labe><p class="red">*</p>
			<table class="website">
				<tr class="tr-height">
					<th class="none-border"></th>
					<th>Site Name</th>
					<th>URL</th>
					<th>Speed</th>
					<th>Design</th>
				</tr>
				<tr>
					<th>Website #1</th>
					<td><input type="text" name="name1" id="name_1"></td>
					<td><input type="text" name="url1" id="url_1"></td>
					<td><input type="text" name="speed1" id="speed_1"></td>
					<td><input type="text" name="design1" id="design_1"></td>
				</tr>
				<tr>
					<th>Website #2</th>
					<td><input type="text" name="name2" id="name_2"></td>
					<td><input type="text" name="url2" id="url_2"></td>
					<td><input type="text" name="speed2" id="speed_2"></td>
					<td><input type="text" name="design2" id="design_2"></td>
				</tr>
				<tr>
					<th>Website #3</th>
					<td><input type="text" name="name3" id="name_3"></td>
					<td><input type="text" name="url3" id="url_3"></td>
					<td><input type="text" name="speed3" id="speed_3"></td>
					<td><input type="text" name="design3" id="design_3"></td>
				</tr>
				<tr>
					<th>Website #4</th>
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
				<input type="file" id="resume" value="Chosee File" name="choose_resume">
			</div>
			<div class="button">
				<label for="application"> Application</label>
				<input type="file" value="Choose File" id="application" name="chosee_application">
			<div>
		</div>
		<div class="additional">
			<legend>Additional</legend>
			<label>Additional Comments:</label>
			<textarea placeholder="Here is an exemple of defalut multiline text. ---JsonFormBuilder---"></textarea>
		</div>
		<div class="agree">
			<label for="spam"><input id="spam" type="checkbox" name="spam_check">Sign me up for some spam:</label>
			<label for="agree"><input id="agree" type="checkbox" name="agree_check">I agree to the terms & conditions: <p class="red">*</p></label>
		</div>
		<input type="submit" value="Submit From" name="submit_form" class="submit">
	</form>		
</body>
</html>