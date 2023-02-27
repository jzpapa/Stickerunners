<?php
include('includes/database.php');
					    $itemnaem = $_POST['itemname'];
						$price = $_POST['price'];
						$size = $_POST['size'];
						$des = $_POST['Description'];
						$categ = $_POST['category'];
						
								$query = "INSERT INTO `item`(`prodID`, `category`, `price`, `size`, `description`, `itemName`, `picture`) 
                                VALUES ('NULL','$categ','$price','$size','$des','$itemnaem','NULL')";
								mysqli_query($con,$query);
                                echo "<script>alert('Item successfully add!'); window.location='adminproduct.php'</script>";
				?>