<?php
    // require the include file

    require "../../project.inc";
?>
<!DOCTYPE html>
<html>
<head>
    <img src="../../Pictures/Logo.png" class="left" style="width:250px;height:77px;"> 
    <div class="topnav"> 
    <a href="../../HTML/loggedIn/homepage.html">Home</a>
    <a href="loggedIn/menu.php">Menu</a>
    <a href="../../HTML/loggedIn/contactus.html">Feedback</a>
    <a href="../../HTML/loggedIn/aboutus.html">FAQ</a>
    <a href="../../HTML/loggedIn/map.html">Map</a>
    <a href="../logout.php">Logout</a>
      </div>
    <meta charset="UTF-8">
    <title>Menu List</title>
<link href="../../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>
</head>
<body>
<div class="food">
    <h1>Menu Items</h1>

    <!-- main section used for formatting -->
    <section class="main">
        <!-- section that contains the data -->
        <section class="background left-column">
            <?php
                // write out the team table
                ReadMenuItems();
            ?>
        </section>
    </section>
</div>
</body>
</html>    

