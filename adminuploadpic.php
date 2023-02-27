<!DOCTYPE html>
<html>

	<head>
		<title>Admin Upload Photo - Sticker Runners</title>
        <link rel="icon" href="image/icon.ico">
		<link rel="stylesheet" type="text/css" href="updatephotostyle.css">
	</head>

<body>
<div class="background">
        <div class="box">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php include ('adminsession.php');?>
<center>

<form method="post" enctype="multipart/form-data">
<input type="file" class="filename" id="choose" name="image"><br>
<input type="submit" class="btn-sign-up" value="save" name="image" /><br>

<?php
							include ('includes/database.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$update=mysqli_query($con,"UPDATE item SET picture = '$location' WHERE prodID='$user'");
									
									$update1=mysqli_query($con,"UPDATE comments SET image = '$location' WHERE prodID='$user'");

									}
										header('location:adminitem.php');
									
									
									}
							}
						?>
						</form><br>
<button onclick="goBack()"class="btn-sign-up">Back</button>
                        </center>
</div>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>
</body>

</html>