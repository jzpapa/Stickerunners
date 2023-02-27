<!DOCTYPE html>
<html>

	<head>
		<title>Sign up - Sticker Runners</title>
		<link rel="stylesheet" type="text/css" href="signup.css">
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
	<link rel="icon" href="image/icon.ico">
	</head>

<body>
		<div class="background">
        <div class="box">
            <div class="login">
			<h1>Sign up!</h1>
			<b>All fields are required.</b>
		

		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>First name*</label></td>
					<td><label>Last name *</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname....." title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Enter your lastname....." title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name*</label></td>
					<td><label>Repeat user name*</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username....." title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Re-enter your username" required /></td>
				</tr>
			</table>
	<br>
		
		

			<legend>Profile information</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Birthday</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2014)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Mobile number*</label></td>
					<td><input type="text" name="number" placeholder="09...." maxlength="13" title="Enter your mobile number" required /></td>
				</tr>
			</table>

		
		<br>
		
			<legend>Log in information*</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Your email address*</label></td>
					<td><label>Repeat email *</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Enter your email address....." title="Enter your email address" required /></td>
					<td><input type="text" name="email2" class="form-1" title="Re-enter your email address" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one can see your email address.</td>
				</tr>
				<tr>
					<td><label>Password*</label></td>
					<td><label>Repeat password*</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password....." title="Enter your username" required /></td>
					<td><input type="password" name="password2" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: no-one else can see your password.</td>
				</tr>
			</table>

					<input type="submit" name="submit" value="Continue" class="btn-sign-in" title="Log in" />
					<a href="signin.php"><input type="button" value="Cancel" class="btn-sign-up"/></a>
		</form>
			
		<br>
		<br>
		</div>
        </div>
</div>
</body>

</html>