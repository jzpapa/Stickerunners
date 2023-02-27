<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/icon.ico">
    <link href="index.css" rel="stylesheet">
    <title>Welcome to Sticker Runners!</title>
  </head>
  <body>
  <?php include ('session.php');?>
        <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                   <img src="image/logo.png" alt="" width="100px">
                    <h1> Sticker Runners</h1>
                </div>
            <nav>
                <ul>
                    <li id="home"><a href="">Home</a></li>
                    <li id="products"><a href="userproduct.php">Products</a></li>
                    <li id="about"><a href="userabout.php">About</a></li>
                    <li id="contact"><a href="usercontact.php">Contact</a></li>
                    <li><a href="userprofile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
                    <li><a href="logout.php" title="Log out">Log Out</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img id="cart" src="image/cart.png" width="30px" heigh="30px"></a>
        </div><hr id="line1"> 

            <div class="row">
                <div class="welcome">
                    <h1>We will bring you <br>A new Style</h1>
                    <p>"Fashion is about dressing according to what's fashionable. Style is more about being yourself." —Oscar de la Renta</p>
                    <a href="product.html" class="btn">Shop now &#8594</a>
                </div>
                <div class="welcome">
                    <img src="image/welcome.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="categories">
        <br> <br>
        <h2 class="featured">Featured Categories</h2>
        <br>
        <div class="small-container">
            <div class="row">
                <div class="cat1">
                    <a href="usermenprod.php"><img src="image/clothes.jpg"></a>
                    <p class="featuredWord">Men's Clothing</p>
                </div>
                <div class="cat1">
                    <a href="userwomenprod.php"><img src="image/women.jpg"></a>
                    <p class="featuredWord">Women's Clothing</p>
                </div>
                <div class="cat1">
                    <a href="usermug.php"><img src="image/mug.jpg"></a>
                    <p class="featuredWord">Mugs</p>
                </div>
            </div>

        </div>
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