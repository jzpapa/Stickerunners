<!DOCTYPE html>
<html>
<head>
    <title>Admin Log In - Sticker Runners</title>
    <link rel="icon" href="image/icon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="signinadmin.css">
	</head>

<body>
<div class="background">
        <div class="box">
            <div class="login">
        <table>
            <br>
			<h1>Sticker Runners (Admin)</h1>
	        <form method="post" action="adminlogin_form.php" enctype="multipart/form-data">
					<label>Email</label><br>
					<input type="email" name="email" placeholder="example@gmail.com" id="username" title="Enter your email" required /><br>
					<label>Password</label><br>
					<input type="password" name="password" placeholder="************" id="password" title="Enter your password" required /><br><br>
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in"/>                    
                    <a href="signin.php"><input type="button" value="Back" class="btn-sign-up"/></a>
            </form>
            <br><br>
        </table>
</div>
        </div>
</div>
</body>

</html>