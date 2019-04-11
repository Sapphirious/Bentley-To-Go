<?php
   require("../project.inc");
   
   session_start();   

   $Connect = DatabaseConnect();
   
   $email = $_POST["user_id"];
   $password = $_POST["user_pass"];

   $SQL = "select email, password from user_profile where email = \"".$email."\" and password = \"".$password."\";";

   $result = $Connect->query($SQL);
   
   if($result && $result->num_rows)
   {
      $_SESSION['login_user'] = $email;
      header("Location: ../PHP/profile.php");
   }
   else
   {
      echo $Connect->error;
      echo "\nInvalid login information";
   }
 
   exit();
?>

