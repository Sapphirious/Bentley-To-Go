<!DOCTYPE html>
<html>
<link href="../project.css" type="text/css" rel="Stylesheet" id = "currentStyle"/>

<body>
    <img src="../Pictures/Logo.png" class="left" style="width:250px;height:77px;">
    <div class="topnav"> 
    <a href="../HTML/home.html">Home</a>
    <a href="menu.php">Menu</a>
    <a href="../HTML/contactus.html">Feedback</a>
    <a href="../HTML/aboutus.html">FAQ</a>
    <a href="../HTML/map.html">Map</a>
    <a href="login.php">User Login</a>
      </div>

<div class="food">
<fieldset>
<legend><b>User Login:</b></legend>

 <form id="login-form" method="POST" action="select.php" >
        <table border="0.5" >
            <tr>
                <td><p>Username: <input type="text" name="user_id" required="true"/></p></td>
            </tr>
            <tr>
                <td><p>Password: <input type="password" name="user_pass" required = "true"/></p></td>
            </tr>
			
            <tr>		
                <td><button type="submit">Login</button></td>			
            </tr>
        </table>
</fieldset>
	<p>Don't have an account? Sign up <a href="../HTML/register.html">HERE</a>
    
    </form>
</div>
</body>
</html>





