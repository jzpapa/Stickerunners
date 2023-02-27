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
                        <h2>List of Products</h2> <a href="adminadditem.php" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Size</th>
                                        <th>Description</th>
                                        <th>Picture</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM item';
                    $result = mysqli_query($con, $query);
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                            $picture = $row['picture'];
                                             
                            echo '<tr>';
                            echo '<td>'. $row['itemName'].'</td>';
                            echo '<td>'. $row['category'].'</td>';
                            echo '<td>'. $row['price'].'</td>';
                            echo '<td>'. $row['size'].'</td>';
                            echo '<td>'. $row['description'].'</td>'; 
                            echo '<td>'. $row['picture'].'</td>';                                                    
                            echo '<td> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="adminedititem.php?id='.$row['prodID'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="delitem.php?id=' . $row['prodID'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>