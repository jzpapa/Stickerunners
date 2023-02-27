<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product - Sticker Runners</title>
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
                  <h2>Update item</h2>
                  <?php 
                  
                  $idp = $_GET["id"];
                  include('includes/database.php'); 
                  $query=mySQLi_query($con,"SELECT * from item WHERE prodID=$idp");
                  $row=mySQLi_fetch_array($query);
                  $prodid = $row['prodID'];
                  $category = $row['category'];
                $price = $row['price'];
                $size  = $row['size'];
                $description = $row['description'];
                $itemName = $row['itemName'];
                  
                  ?>
                      <div class="col-lg-6">

                        <form method="post" action="admintransacitem.php?id=<?php echo $prodid?>">
                            
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $itemName ?>" name="itemname">
                            </div>
                            <div class="form-group">
                              <input class="form-control" value="<?php echo $price ?>" name="price">
                            </div> <br>
                            <label for="category">Choose size</label>
                                <select name="size" id="category">
                                <option><?php echo $size ?></option>
                                <option>small</option>
                                <option>medium</option>
                                <option>large</option>
                                </select>
<br><br>
                            <label for="category">Choose category</label>
                                <select name="category" id="category">
                                <option><?php echo $category ?></option>
                                <option>men</option>
                                <option>women</option>
                                <option>mug</option>
                                </select>
                                <br><br>

                                <a href="adminitemupload.php?id=<?php echo $prodid?>">Update item photo</a>
                                
<br><br>
                            <div class="form-group">
                             <label>Description</label>
                              <textarea class="form-control" rows="3" name="Description"><?php echo $description ?></textarea>
                            </div>  
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


                      </form>  
                    </div>
                </div>
            </div>
</body>
</html>