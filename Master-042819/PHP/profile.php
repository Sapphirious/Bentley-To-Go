<?php
	include('session.php');
	if(!isset($_SESSION['login_user'])){
		header("location:login.php");
	}
?><!DOCTYPE html>
<html>
<style>
.userform {
  column-count: 3;

}
</style>
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
</head>
<body>
<b id="welcome">Welcome : <i><?php echo $_SESSION['login_user']; ?></i></b>
</div>
<div class="userform">
<form name="reg-form" action="./updatepayment.php" method="POST">

<fieldset>
    <legend><h3>Update Payment Information:</h3></legend> 
	<p>Card Holder First Name: <input name="first-name" type="text" required="true" placeholder="First Name" /></p>
	<p>Card Holder Last Name:<input name="last-name" type="text" required="true" placeholder="Last Name" /></p>
	<p>Card Number: <input name="cardnum" type="text" required="true" placeholder="Card Number"/></p>
	<p>Experation Date: <input name="expdate" type="date" placehold="Experation Date" required="true"/></p>
	<p>Security Code: <input name="ccv" type="text" required="true" placeholder="CCV"/></p>
	<p>Billing Address: <input name="billingaddress" type="text"  required="true" placeholder="Billing Address"/></p>
	<p>Billing State: <SELECT NAME="states">
<OPTION SELECTED>Select a State
<OPTION>Alabama
<OPTION>Alaska
<OPTION>Arizona
<OPTION>Arkansas
<OPTION>California
<OPTION>Colorado
<OPTION>Connecticut
<OPTION>Delaware
<OPTION>Florida
<OPTION>Georgia
<OPTION>Hawaii
<OPTION>Idaho
<OPTION>illinois
<OPTION>Indiana
<OPTION>Iowa
<OPTION>Kansas
<OPTION>Kentucky
<OPTION>Louisiana
<OPTION>Maine
<OPTION>Maryland
<OPTION>Massachusetts
<OPTION>Michigan
<OPTION>Minnesota
<OPTION>Mississippi
<OPTION>Missouri
<OPTION>Montana
<OPTION>Nebraska
<OPTION>Nevada
<OPTION>New Hampshire
<OPTION>New Jearsey
<OPTION>New Mexico
<OPTION>New York
<OPTION>North Carolina
<OPTION>North Dakota
<OPTION>Ohio
<OPTION>Oklahoma
<OPTION>Oregon
<OPTION>Pennsylvania
<OPTION>Rhode Island
<OPTION>South Carolina
<OPTION>South Dakota
<OPTION>Tennessee
<OPTION>Texas
<OPTION>Utah
<OPTION>Vermount
<OPTION>Virginia
<OPTION>Washington
<OPTION>Washington D.C.
<OPTION>West Virginia
<OPTION>Wisconsin
<OPTION>Wyoming</SELECT></p>
	<p>Billing Zipcode: <input name="zipcode" type="text" required="true" placeholder="Zipcode"/></p>
    <input type="submit" value="Update Payment Method"/>
  </fieldset>
  </form>
  <form name="reg-form" action="./changepword.php" method="POST">
  <fieldset>
  
    <legend><h3>Change Password:</h3></legend> 
	<p>Current Password: <input name="cpassword" type="password" required="true" placeholder="Current Password" /></p>
	<p>New Password:<input name="npassword" type="password" required="true" placeholder="New Password" /></p>
	<p>New Password Confirmation: <input size="30px" name="npassword1" type="password" required="true" placeholder="New Password Confirmation"/></p>
	<input type="submit"  name="update" value="Change Password"/>
	
	</fieldset>
	</form>
	<form name="reg-form" action="./remove.php" method="POST">
	<fieldset>
	<legend ><h3>Remove Account:</h3></legend>
	<p>Password For Verification:<input name="dpassword" type="password" required="true" placeholder="Password"/></p>
	<input type="submit" name="delete" value="Delete Account"  />
	</fieldset>
  
</form>
</div>

</body>
</html>
