<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item - Sticker Runners</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="item.css">
    <link rel="icon" href="image/icon.ico">
</head>
<body>
<?php include ('session.php');?>
    <div class="top">
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" width="100px">
                <h1> Sticker Runners</h1>
            </div>
            <nav>
                <ul>
                    <li id="home"><a href="userhome.php">Home</a></li>
                    <li id="products"><a href="userproduct.php">Products</a></li>
                    <li id="about"><a href="userabout.php">About</a></li>
                    <li id="contact"><a href="usercontact.php">Contact</a></li>
                    <li><a href="userprofile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
                    <li><a href="logout.php" title="Log out">Log Out</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img id="cart" src="image/cart.png" width="30px" heigh="30px"></a>
        </div>
    </div>
    <?php
    
    $idp = $_GET["id"];
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from item WHERE prodID=$idp");
			while($row=mySQLi_fetch_array($query)){
                $id = $row['prodID'];
				$category = $row['category'];
                $price = $row['price'];
                $size  = $row['size'];
                $description = $row['description'];
                $itemName = $row['itemName'];
                $picture = $row['picture'];
?>
    <div class="flex-container">
            <div class="box1">
                <img src="<?php echo $picture ?>" alt="">
            </div>
            <div class="box2">
                <div class="word">
                    <h1><?php echo $itemName ?></h1>
                    <span>&#8369;<?php echo $price ?></span><br>
                    <select name="size" id="">
                        <option value="A">small</option>
                        <option value="B">medium</option>
                        <option value="C">large</option>
                    </select><br>
                    <span>Quantity: </span> <input type="number" id="text"/> <br><br>
                    <span id="info">Information: </span> <br>
                    <span><?php echo $description ?></span> <br>
                    <button id="cart" >Add to cart</button>
                    
            </div>
        </div>
    </div>
    <?php }?>
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