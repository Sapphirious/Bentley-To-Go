<!DOCTYPE html>
<?php
   require("../project.inc");
   
   session_start();   

   $Connect = DatabaseConnect();
   
   $email = $_POST["email"];
   $password = $_POST["dpassword"];

	$SQL = "delete from payment_info where EXIST and email = \"".$email."\";";
	$SQL = "delete from user_profile where email = \"".$email."\" and password = \"".$password."\";";
	
  	$result = $Connect->query($SQL);
   exit();
?>

<html>
<head>

</head>
<body>
<h1>Delete Account</h1>
<?php
    DeleteUser();
?>
<a href="../HTML/homepage.html">Return to Main Page</a>
</body>
</html>

