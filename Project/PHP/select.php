<?php
   require("../project.inc");
   
   session_start();   

   $Connect = DatabaseConnect();
   
   $username = $_POST["user_id"];
   $password = $_POST["user_pass"];

   $SQL = "select username, password from user_profile where username = \"".$username."\" and password = \"".$password."\";";

   $result = $Connect->query($SQL);
   
   if($result && $result->num_rows)
   {
      $_SESSION['login_user'] = $username;
      header("Location: profile.php");
   }
   else
   {
      echo $Connect->error;
      echo "\nInvalid login information";
   }
 
   exit();
?>

