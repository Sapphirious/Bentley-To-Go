<?php
   require("../project.inc");
   
   session_start();   

   $Connect = DatabaseConnect();
   
   $email = $_POST["email"];
   $password = $_POST["dpassword"];

	$SQL = "delete from payment_info where email = \"".$email."\" and EXIST;";
	$SQL = "delete from user_profile where email = \"".$email."\" and password = \"".$password."\";";
	
   $result = $Connect->query($SQL);
	
   exit();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Delete Account</h1>
<?php
    DeleteUser();
?>
<a href="../HTML/loggedIn/homepage.html">Return to Main Page</a>
<?php
    DeleteUser();
?>
</body>
</html>

