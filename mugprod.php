<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Sticker Runners</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/icon.ico">
    <link rel="stylesheet" href="mugprodstyle.css">
</head>
<body>
    <div class="top">
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" width="100px">
                <h1> Sticker Runners</h1>
            </div>
            <nav>
                <ul>
                    <li id="home"><a href="index.php">Home</a></li>
                    <li id="products"><a href="">Products</a></li>
                    <li id="about"><a href="about.php">About</a></li>
                    <li id="contact"><a href="contact.php">Contact</a></li>
                    <li id="account"><a href="signin.php">Log In</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img id="cart" src="image/cart.png" width="30px" heigh="30px"></a>
        </div>
    </div>
    <div class="mid">
        <div class="categories">
            <nav>
                <ul>
                    <li id="all"><a href="product.php"> All products </a></li>
                    <li id="men"><a href="menprod.php">Men's Clothing</a></li>
                    <li id="women"><a href="womenprod.php">Women's Clothing</a></li>
                    <li id="mug"><a href="">Mugs</a></li>
                </ul>
            </nav>
        </div>
        <?php
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from item WHERE category='mug'");
			while($row=mySQLi_fetch_array($query)){
				$category = $row['category'];
                $id = $row['prodID'];
                $price = $row['price'];
                $size  = $row['size'];
                $description = $row['description'];
                $itemName = $row['itemName'];
                $picture = $row['picture'];
?>
        <div class="column">
            <div class="box">
                <div class="item">
                    <a href="item.php?id=<?php echo $id; ?>"><img src=<?php echo $picture ?>></a>
                    <p><?php echo $itemName ?></p>
                    <p>&#8369;<?php echo $price ?></p>
                </div>
            </div>
        </div>
            <?php }?>
    </div>
    <div class="footer">
        <br>
        <div class="icon">
            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.facebook.com/stickerrunners2020"><i class="fa-brands fa-facebook"></i></a> 
            <a href="https://www.facebook.com/messages/t/110401353888420"><i class="fa-brands fa-facebook-messenger"></i></a>
            <p>©2022, All Rights Reserved | Sticker Runners</p>
            <br>  
    
        </div>
    </div>
</body>
</html>