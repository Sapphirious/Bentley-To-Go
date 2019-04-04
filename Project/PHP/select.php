<?php
   require("../project.inc");

   $Connect = DatabaseConnect();
   
   $username = $_POST["user_id"];
   $password = $_POST["user_pass"];

   $SQL = "select username, password from user_profile where username = \"".$username."\" and password = \"".$password."\";";

   $result = $Connect->query($SQL);
   
   if($result && $result->num_rows)
   {
      header("Location: ../HTML/home");
   }
   else
   {
      echo $Connect->error;
      echo "Invalid login information";
   }
 
   exit();
?>

