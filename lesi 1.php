<?php
include('header.php');
?>
<body>
<?php
include('navtop.php');
?>
<div id="background">
    <div id="page">
        <?php include('nav_sidebar.php'); ?>
        <div id="content">
            <div class="hero-unit-table">
                <div class="slider-wrapper theme-default">
                    <!-- image slider -->
                    <img src="admin/images/banner1.jpg" data-thumb="images/toystory.jpg" alt="">
                    <img src="admin/images/bag1.jpg" data-thumb="images/toystory.jpg" alt="">
                    <img src="admin/images/bag2.jpg" data-thumb="images/wineries.jpg" alt="">
                    <img src="admin/images/bag3.jpg" alt="" data-transition="slideInLeft">
                </div>
                <!-- end slider -->
            </div>
            <center><h3 class="center alert alert-success" style="width:500px; font-weight: bold;">Latest Item</h3></center>
            <div id="body">
                <div class="body">
                    <ul>
                        <li>
                            <a class="figure" href="#pic1" data-toggle="modal"><img class="image-rounded" src="pics/HANDBAG/bags1.jpg" alt="*"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<ul>
    <li>
        <a class="figure" href="#pic1" data-toggle="modal"><img class="image-rounded" src="pics/SCHOOL/bagS1.jpg" alt=""></a>
    </li>
    <li>
        <a class="figure" href="#pic2" data-toggle="modal"><img class="image-rounded" src="pics/TRAVEL/bagT1.jpg" alt=""></a>
    </li>
    <li>
        <a class="figure" href="#pic3" data-toggle="modal"><img class="image-rounded" src="pics/TRAVEL/bagT2.jpg" alt=""></a>
    </li>
</ul>

<div id="header">
</div>
<div id="body">
    <h3>List of Our Products</h3>
    <?php include("product_menu.php"); ?>
    <ul class="thumbnails">
    <?php
    $conn = mysql_connect("School") or die(mysql_error());
    $query = mysql_query("SELECT * FROM tb_products WHERE category = 'School'");
    
    while ($row = mysql_fetch_array($query)) {
        $id = $row['productID'];
    ?>
        <li class="span3">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="">
                <div class="alert alert-info">
                    <div class="font1"><?php echo $row['name']; ?></div>
                    <hr>
                    <a href="#<?php echo $id; ?>" data-toggle="modal"><img src="admin/<?php echo $row['location']; ?>" class="img-rounded" alt="" width="160" height="200"></a>
                    <p>Price: <?php echo $row['price']; ?></p>
                </div>
            </div>
        </li>
        <!-- Picture Modal -->
        <div id="<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Modal content goes here -->
        </div>
    <?php
    }
    ?>
    </ul>
</div>

<div class="modal-header">
    <!-- Header content goes here -->
</div>
<div class="modal-body">
    <div class="span2">
        <img src="admin/<?php echo $row['location']; ?>" width="200" height="200" class="img-rounded">
    </div>
    <div class="span3">
        <p>Name</p>
        <div class="alert alert-success">&nbsp; &nbsp; <?php echo $row['name']; ?></div>
        <p>Description</p>
        <div class="alert alert-success">&nbsp; &nbsp; <?php echo $row['description']; ?></div>
        <div class="alert alert-success">&nbsp;&nbsp;&nbsp;&nbsp; Made in: <?php echo $row['originated']; ?></div>
        <p>Price</p>
        <div class="alert alert-success">&nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row['price']; ?></div>
    </div>
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp; Close</button>
</div>
<!-- end modal -->

<div id="footer">
    <?php include('footer.php'); ?>
</div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Marketing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <!-- Header content goes here -->
    </div>
    <div id="body">
        <h3>E-Marketing</h3>
        <div class="signup">
            <a href="signup.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Sign Up</a>
        </div>
        <!-- Rest of your content -->
    </div>
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
    <?php include("footer_bottom.php"); ?>
</body>


<div class="signup">
    <a href="signup.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Sign Up</a>
</div>
<hr>
<div class="row-fluid">
    <div class="span12">
        <!-- Form content goes here -->
    </div>
</div>
<div class="row-fluid">
    <div class="span2"></div>
    <div class="span8">
        <ul class="thumbnails">
            <li class="span12">
                <div class="thumbnail">
                    <img data-src="holder.js/300x200" alt="">
                    <form class="form-horizontal" method="post">
                        <div class="alert alert-success"><strong>Customer Login</strong></div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Email</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" name="username" placeholder="Email">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Password</label>
                            <div class="controls">
                                <input type="password" id="inputPassword" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary" name="login">
                                    <i class="icon-signin icon-large"></i>&nbsp;Sign in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php
if (isset($_POST['login'])) {
    function clean($str) {
        $str = trim($str);
        if (get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }
    // Rest of your PHP code for handling login
}
?>

<?php
if (isset($_POST['login'])) {
    function clean($str) {
        $str = trim($str);
        if (get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    $Susername = clean($_POST['username']);
    $Spassword = clean($_POST['password']);

    $Squery = mysql_query("SELECT * FROM tb_member WHERE Email='$Susername' AND Password='$Spassword'") or die(mysql_error());
    $Scount = mysql_num_rows($Squery);

    if ($Scount > 0) {
        $Srow = mysql_fetch_array($Squery);
        $_SESSION['id'] = $Srow['memberID'];
        echo '<script>window.location = "user_school.php";</script>';
    } else {
        session_write_close();
        echo '<div class="alert alert-error">Please check your username and password</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Marketing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Your content goes here -->
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
    <?php include("footer_bottom.php"); ?>
</body>
</html>

<!-- Admin Control Panel Page -->
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Marketing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post">
        <h1>Administrator Log in</h1>
        <div class="inset">
            <!-- Admin login form content goes here -->
        </div>
    </form>
</body>
</html>
<?php
include('connect.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = mysql_query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'") or die(mysql_error());
    $count = mysql_num_rows($query);
    
    if ($count > 0) {
        session_start();
        $_SESSION['admin_id'] = $username;
        header("location: admin_home.php");
    } else {
        session_write_close();
        echo '<div class="alert alert-error">Please check your username and password</div>';
    }
}

ob_end_flush();
<?php
ob_start(); // Start output buffering
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>E-Marketing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <!-- Header content goes here -->
    </div>
    
    <div id="body">
        <h3>E-Marketing</h3>
        <div class="signup">
            <a href="signup.php" class="btn btn-success">
                <i class="icon-pencil icon-large"></i>&nbsp;Sign Up
            </a>
        </div>
        
        <hr>
        
        <div class="row-fluid">
            <div class="span12">
                <!-- Form content goes here -->
            </div>
        </div>
        
        <div class="row-fluid">
            <div class="span2"></div>
            <div class="span8">
                <ul class="thumbnails">
                    <li class="span12">
                        <div class="thumbnail">
                            <img data-src="holder.js/300x200" alt="">
                            <form class="form-horizontal" method="post" action="login.php"> <!-- Specify the action attribute for the form -->
                                <div class="alert alert-success"><strong>Customer Login</strong></div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="username" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" name="password" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary" name="login">
                                            <i class="icon-signin icon-large"></i>&nbsp;Sign in
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    // Your login handling PHP code here
    // For example, you can access username and password as follows:
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform your authentication logic here
    // You can use SQL queries or any other method to check credentials
    // If authentication is successful, you can redirect the user to another page
    // If authentication fails, you can display an error message
}

ob_end_flush(); // End output buffering and flush the HTML content
?>

    </div>
    
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
    
    <?php include("footer_bottom.php"); ?>
</body>
</html>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Marketing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <!-- Header content goes here -->
    </div>
    
    <div id="body">
        <h3>E-Marketing</h3>
        <div class="signup">
            <a href="signup.php" class="btn btn-success">
                <i class="icon-pencil icon-large"></i>&nbsp;Sign Up
            </a>
        </div>
        
        <hr>
        
        <div class="row-fluid">
            <div class="span12">
                <form method="post">
                    <div class="control-group">
                        <label class="control-label" for="email">USERNAME</label>
                        <input style="color: white;" type="text" name="username" id="email">
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">PASSWORD</label>
                        <input style="color: white;" type="password" name="password" id="password">
                    </div>
                    <center>
                        <p class="p-container">
                            <input type="submit" name="go" id="go" value="Log in">
                        </p>
                    </center>
                </form>
                <?php
                include("connect.php");
                if(isset($_POST['go'])) {
                    $Susername = $_POST['username'];
                    $Spassword = $_POST['password'];
                    
                    // Your further PHP code for processing the login
                }
                ?>
            </div>
        </div>
    </div>
    
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
    
    <?php include("footer_bottom.php"); ?>
</body>
</html>
 