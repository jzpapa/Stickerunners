<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Sticker Runners</title>
    <link rel="icon" href="image/icon.ico">
    <link rel="stylesheet" href="usercontactstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
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
                    <li id="contact"><a href="">Contact</a></li>
                <li><a href="userprofile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
                <li><a href="logout.php" title="Log out">Log Out</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img id="cart" src="image/cart.png" width="30px" heigh="30px"></a>
        </div>
    </div>
    <div class="mid">
        <br><br>
        <h1 id="title">Contact Us</h1> <br><br>
        <div class="container">
            <div class="left-column">
                <i class="fa-solid fa-location-dot"></i>
                <h1>Opening Hours</h1>
                <p>Everyday 8:00am - 7:00pm </p>
            </div>
            <div class="mid-column">
                <i class="fa-solid fa-phone"></i>
                <h1>Phone number</h1>
                <p>0968-326-3991</p>
            </div>
            <div class="right-column">
                <i class="fa-solid fa-envelope"></i>
                <h1>Email</h1>
                <p>Stickerrunners@gmail.com</p>
                <p>facebook.com/stickerrunners2020</p>
            </div>
        </div>
        <hr>
        <br>
        <h1 id="title">You can locate us with this map</h1>
        <a href="image/location.PNG"><img src="image/location.PNG" alt=""></a>
        <div class="link">
            <p>Unit 7 #92 Toledos Compound, Bagtas Rd, Tanza, 4108 Cavite</p> <br>
            <p> or you can use this link: </p>
            <a href="https://www.google.com/maps/place/StickerRunners/@14.3354954,120.8573729,18z/data=!4m5!3m4!1s0x33962b41258a8063:0xae86bc500b51ca5b!8m2!3d14.3350458!4d120.8564022"><p id="plink">Google Maps</p></a>
        </div>
        <br>
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