<?php
    // require the include file

    require "../project.inc";
?>
<!DOCTYPE html>
<html>
<script>
</script>
<head>
<meta http-equiv="refresh" content="10">
    <img src="../Pictures/Logo.png" class="left" style="width:250px;height:77px;"> 
    <div class="topnav"> 
    <a href="login.php">Log Out</a>
      </div>
    <meta charset="UTF-8">
    <title>Admin Orders</title>
<link href="../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>
</head>
<body>
<div>
 <form name="reg-form" action="./complete.php" method="POST">
  <fieldset>
  
    <legend><h3>Complete Order:</h3></legend> 
	<p>Order ID: <input name="order_id" type="text" required="true" placeholder="Order ID" /></p>
	<input type="submit"  name="update" value="Complete Order"/>
	
	</fieldset>
	</form>

<div class="food">
<fieldset align>
<legend><b>Here Are The Orders:</b></legend>    
    <!-- main section used for formatting -->
    <section class="main">
        <!-- section that contains the data -->
        <section class="background left-column"  >
            <?php
                // write out the team table
                ReadOrders();
            ?>
        </section>
    </section>
</fieldset>
</div>
</body>
</html>    

