    <?php
    include('session.php'); 
    if(!isset($_SESSION['login_user'])){ 
      header("location: login.php"); // Redirecting To Home Page 
    }
    ?>
<!DOCTYPE html>
<html>
<link href="../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>

<body>
    <img src="../Pictures/Logo.png" class="left" style="width:250px;height:77px;"> 
    <div class="topnav"> 
    <a href="../../../HTML/home.html">Home</a>
    <a href="../PHP/loggedIn/Cart">Order</a>
     <b id="logout"><a href="logout.php">Log Out</a></b>
      </div>

	
<div class="food">
</head>
<body>
<b id="welcome">Welcome : <i><?php echo $login_user; ?></i></b>
</div>
</body>

</html>
