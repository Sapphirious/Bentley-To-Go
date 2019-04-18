<!DOCTYPE html>
<html>
<link href="../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>
<body>
    <img src="../Pictures/Logo.png" class="left" style="width:250px;height:77px;"> 
    <div class="topnav"> 
    <a href="homepage.php">Home</a>
    <a href="contactus.php">Feedback</a>
    <a href="aboutus.php">FAQ</a>
    <a href="profile.php">Profile</a>
    <a href="../PHP/loggedIn/Cart">Order</a>
     <b id="logout"><a href="logout.php">Log Out</a></b>
      </div>


<div class="food">
 <h1>Feedback</h1>
      <p>If you have any questions or concerns, please submit the following data:</p>

<form name="data-input" action="../PHP/feedback.php" method="POST">
  <fieldset>
    <legend>Submit Information:</legend>
	<p>First Name: <input name="first-name" type="text" required="true" /></p>
	<p>Last Name: <input name="last-name" type="text" required="true" /></p>
	<p>Email: <input name="email" type="text" required="true" /></p>
	<p>Comments: <input name="comments" type="text" required="true"style="width: 300px;" /></p>


    <input type="submit" value="Submit">
  </fieldset>
</form>


</div>
</body>

</html>

