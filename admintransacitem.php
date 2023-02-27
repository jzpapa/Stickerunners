<?php
$idp = $_GET["id"];
include('includes/database.php');
                        $itemnaem = $_POST['itemname'];
						$price = $_POST['price'];
						$size = $_POST['size'];
						$des = $_POST['Description'];
						$categ = $_POST['category'];
						
								$query = "UPDATE `item` SET `category`='$categ',`price`='$price',`size`='$size',`description`='$des',`itemName`='$itemnaem' WHERE prodID=$idp";
								mysqli_query($con,$query);
                                echo "<script>alert('Item successfully edit!'); window.location='adminproduct.php'</script>";
				?>