<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product Upload - Sticker Runners</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/icon.ico">    
    <link href="adminprodstyle.css" rel="stylesheet">
</head>
<body>
<?php include ('adminsession.php');?>
<div class="top">
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" width="100px">
                <h1> Sticker Runners</h1>
            </div>
            <nav>
                <ul>
                    <li id="home"><a href="adminhome.php">Home</a></li>
                    <li id="products"><a href="adminproduct.php">Products</a></li>
                    <li id="about"><a href="adminuser.php">Users</a></li>
                    <li><a href="adminprofile.php" title="<?php echo $username ?>"><?php echo $username ?></label></a></li>
                    <li><a href="logout.php" title="Log out">Log Out</a></li>                    
                </ul>
            </nav>
        </div>
    </div>
    <div class="mid"><center><br><br><br><br><br><?php $idp = $_GET["id"]; ?>
        <form action="adminuploadphoto.php?id=<?php echo $idp?>" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form><br>
<button><a href="javascript:history.go(-1)">Cancel</a></button>
</center>
    </div>
</body>
</html>