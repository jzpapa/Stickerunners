<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User - Sticker Runners</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/e66bd0348b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/icon.ico">
    <link href="adminprofile.css" rel="stylesheet">
</head>
<body>
<?php include ('adminsession.php');?>
<div class="top">
        <div class="navbar">
            <div class="logo">
                <img src="image/logo.png" alt="" width="90px">
                <h1> Sticker Runners</h1>
            </div>
            <nav>
                <ul>
                    <li id="home"><a href="adminhome.php">Home</a></li>
                    <li id="products"><a href="adminproduct.php">Products</a></li>
                    <li id="user"><a href="adminuser.php">Users</a></li>
                    <li id="admin"><a href="adminprofile.php" title="<?php echo $username ?>"><?php echo $username ?></label></a></li>
                    <li><a href="logout.php" title="Log out">Log Out</a></li>                    
                </ul>
            </nav>
        </div><hr id="line1"> 
    </div>
    <div class="mid">

            <div class="col-lg-12">
                        <h2>Administrator Account</h2>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>First Nane</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM admin';
                    $result = mysqli_query($con, $query);
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['firstname'].'</td>';
                            echo '<td>'. $row['username'].'</td>';   
                            echo '<td>'. $row['email'].'</td>'; 
                            echo '<td>'. $row['password'].'</td>';                       
                            echo '<td> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="adminaccountedit.php?id='.$row['user_id'] . '"> EDIT </a> ';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>