<?php
require "../project.inc";
?>
<html>
<head>
<title> Admin Page </title>
<link href="../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>
</head>
<body>
<div class = food>
<h1> Admin Login </h1>
</div>

<div id = "main" class = "food">

	<section class = "background right-column">
		<p> Please Login </p>

	<form method = "POST" action="adminlogin.php" >
		<p> Username <input type = "text" name = "username" class = "text" required = "true"></p>
		<p> Password <input type = "text" name = "pass" class = "text" required = "true"></p>
		<p><button type = "submit"> Login </button> </p>
</form>
</section>
</div>
</body>
</html>

