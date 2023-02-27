<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Sticker Runners</title>
    <link rel="icon" href="image/icon.ico">
    <link rel="stylesheet" href="userprofile.css">
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
                <li id="contact"><a href="usercontact.php">Contact</a></li>
                <li><a href="" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
                <li><a href="logout.php" title="Log out">Log Out</a></li>
            </ul>
        </nav>
        <a href="cart.html"><img id="cart" src="image/cart.png" width="30px" heigh="30px"></a>
    </div>
    </div>

    <div class="profile">
        <div class="profile-top">
            <br><br><br><br><br><br><br>
            <div class="clip1">
            <a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $profile_picture ?>"></a>
            </div>
            <div class="user-details">
            <h1><?php echo $firstname ?> <?php echo $lastname ?></h1>
            </div>
         </div>
         <div class="profile-mid">
            <div class="profile-nav">
                <br>
                <nav>
                    <ul>
                        <li id="home"><a href="">Profile</a></li>
                        <li id="products"><a href="">My Cart</a></li>
                        <li id="about"><a href="">Refund Items</a></li>
                        <li id="contact"><a href="">Settings</a></li>
                    </ul>
                </nav>
            </div>

            <div class="mid-about">
                <br><br>
                <h1>Profile</h1> <br>
                <p>Joined Date: <?php echo $datejoin ?></p> <br><br><hr> <br><br><br><br>
                <h1>About</h1>
                <input type="text" id="desc" name="desc">
                <br><br><br><br>
            </div>
            <br>
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