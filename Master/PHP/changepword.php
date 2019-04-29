<?php
   require("../project.inc");
   
   session_start();   

   $Connect = DatabaseConnect();
   
   $email = $_SESSION["login_user"];
   $password = $_POST["npassword"];
	$SQL = "update user_profile set password = \"".$password."\" where email = \"".$email."\";";
	
   $result = $Connect->query($SQL);
	
   exit();
?><!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Registration</h1>
<?php
    ChangePWord();
?>
<a href="../HTML/home.html">Return to Main Page</a>
</body>
</html>

