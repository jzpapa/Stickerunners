<!DOCTYPE html>
<html>
<head>
    <title>Sign in - Sticker Runners</title>
    <link rel="icon" href="image/icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="signin.css">
	</head>

<body>
<div class="background">
        <div class="box">
            <div class="login">
        <table>
			<h1>Sticker Runners</h1>
	        <form method="post" action="signin_form.php" enctype="multipart/form-data">
					<label>Email</label><br>
					<input type="name" name="email" placeholder="username" id="username" title="Enter your email" required /><br>
					<label>Password</label><br>
					<input type="password" name="password" placeholder="************" id="password" title="Enter your password" required /><br><br>
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in"/>                    
                    <a href="index.php"><input type="button" value="Back" class="btn-sign-up"/></a>
            </form>
            <br><br>
            <a href="adminlogin.php">Admin account?</a> <br>
                <a href="signup.php">Don't have account yet? (Click here!)</a>
        </table>
</div>
        </div>
</div>
</body>

</html>