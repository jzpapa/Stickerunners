<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User Edit - Sticker Runners</title>
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
    <div class="mid">

    <div class="col-lg-12">
                  <h2>Update user account</h2>
                  <?php 
                  
                  $idp = $_GET["id"];
                  include('includes/database.php'); 
                  $query="SELECT * from user WHERE user_id=$idp";
                  $result = mysqli_query($con, $query);
                  $row = mysqli_fetch_assoc($result);
                    $fn = $row['firstname'];
                    $ln = $row['lastname'];
                    $us = $row['username'];
                    $birthday  = $row['birthday'];
                    $gender = $row['gender'];
                    $number = $row['number'];
                    $email = $row['email'];
                    $pass = $row['password'];
                  
                  ?>
                      <div class="col-lg-6">

                        <form method="post" action="adminupdateuser.php?id=<?php echo $idp?>">
                            
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $fn ?>" name="fn">
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="<?php echo $ln ?>" name="ln">
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="<?php echo $us ?>" name="us">
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $birthday ?>" name="birthday">
                            </div>
<br>
                            <label for="gender">Choose gender</label>
                                <select name="gender" id="">
                                <option><?php echo $gender ?></option>
                                <option>male</option>
                                <option>female</option>
                                </select>
                                <br><br>
                            
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $number ?>" name="number">
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="<?php echo $email ?>" name="email">
                            </div>

                            <div class="form-group">
                                <input class="form-control" value="<?php echo $pass ?>" name="pass">
                            </div>
<br>
                            <button type="submit" class="btn btn-default">Update Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>

<br>

                      </form>  
                    </div>
                </div>
            </div>
</body>
</html>