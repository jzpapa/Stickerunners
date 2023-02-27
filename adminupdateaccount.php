<?php
$idp = $_GET["id"];
include('includes/database.php');
                        $fn = $_POST['fn'];
						$us = $_POST['us'];
						$email = $_POST['email'];
                        $pass = $_POST['pass'];
						
								$query = "UPDATE `admin` SET `firstname`='$fn',`username`='$us',`email`='$email',`password`='$pass' WHERE user_id=$idp";
								mysqli_query($con,$query);
                                echo "<script>alert('Account successfully edit!'); window.location='adminprofile.php'</script>";
				?>