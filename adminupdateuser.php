<?php
$idp = $_GET["id"];
include('includes/database.php');
                        $fn = $_POST['fn'];
						$ln = $_POST['ln'];
						$us = $_POST['us'];
						$birthday = $_POST['birthday'];
						$gender = $_POST['gender'];
                        $number = $_POST['number'];
						$email = $_POST['email'];
                        $pass = $_POST['pass'];
						
								$query = "UPDATE `user` SET `firstname`='$fn',`lastname`='$ln',`username`='$us',`birthday`='$birthday',`gender`='$gender',`number`='$number',`email`='$email',`password`='$pass' WHERE user_id=$idp";
								mysqli_query($con,$query);
                                echo "<script>alert('Account successfully edit!'); window.location='adminuser.php'</script>";
				?>