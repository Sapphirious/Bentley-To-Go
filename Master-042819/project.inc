<?php
session_start();
function ReadMenuItems()
{

    $Connection = DatabaseConnect();
    
    // make a select statement to get data from the database
    $SQL = "select item_name, category, price from menu;";

    // execute the query
    //      use the query method of the $Connection object
    $Results = $Connection->query( $SQL );

    // check for results
    //      $Results will evaluate to true if there data is returned
    //      from the database, false if no data is returned
    if ( $Results )
    {
        // start the table HTML
        echo "<table cellpadding = \"5\">\n";
		echo"<colgroup>
    <col span=\"2\">
    <col style=\"background-color:yellow\">
  </colgroup>";
        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>Title</th>\n";
        echo "      <th>Category</th>\n";
	echo "      <th>Price</th>\n";
        echo "   </thead>\n";

        // loop through the results

        while( $Row = $Results->fetch_row() )
        {
            // add  table row
            echo "   <tr>\n";

            // loop through the items in the array
            //      the count function returns the number of items
            //      in the array.
            for( $i=0; $i<count($Row); $i++ )
            {
                // center align the first cell on each row
                if (( $i == 0 ) || ( $i == 1 ) || ( $i == 4 ))
                {
                    // add a centered cell
                    echo "     <td class=\"centered\">";
                }
                else
                {
                    // add left justified cell
                    echo "     <td>";
                }

                // add the rest of the cell
                echo $Row[$i]."</td>\n";
            }

            // end of the table row
            echo "   </tr>\n";
        }
        
        // stop the table HTML
        echo "</table>\n";
    }
    else
    {
        // no results returned
        echo "<p>No results returned from the query</p>\n";
    }

    // close the connection
    $Connection->close();
}

function DatabaseConnect()
{
    // set the connection information
    //      penguin is the server name on the penguin network
    //      set the UserName and Password to your credentials
    //      set the Database to your database (you mysql UserName)
	$Server = "penguin";
	$UserName = "maa3755";
	$Password = "Rizriz32!";
	$Database = "bentley";

    // connect to the database
    //      create a new instance of a mysqli object. this
    //      object contains the connection to the mysql server
    $Connection = new mysqli( $Server, $UserName, $Password, $Database );

    // check for a successful connection
    //      connect_error will evaluate to true if there is an error
    if ( $Connection->connect_error )
    {
        // stop the script and echo an error message
        echo "<h2>Database Error</h2>\n";
        die( "<p>MySQLi Connection Error: ".$Connection->connect_error."</p>\n" );
    }

    // return the connection
    return $Connection;
}

function DisplayComment()
{
    $Connection = DatabaseConnect();
    $SQL = "select first_name, last_name, email, comments from feedback_users;";

    $Results = $Connection->query( $SQL );
    if ( $Results )
    {
        echo " <table>\n";

        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>First Name</th>\n";
        echo "      <th>Last Name</th>\n";
        echo "      <th>Email</th>\n";
        echo "      <th>Comments</th>\n";
        echo "   </thead>\n";

        while( $Row = $Results->fetch_row() )
        {
            // add  table row
            echo "   <tr>\n";
            for( $i=0; $i<count($Row); $i++ )
            {
                // center align the first cell on each row
                if (( $i == 0 ) || ( $i == 1 ) || ( $i == 4 ))
                {
                    echo "     <td class=\"centered\">";
                }
                else
                {
                    echo "     <td>";
                }

                // add the rest of the cell
                echo $Row[$i]."</td>\n";
            }

            // end of the table row
            echo "   </tr>\n";
        }
        
        // stop the table HTML
        echo "</table> \n";
    }
    else
    {
        echo "<p>No results returned from the query</p>\n";
    }

    // close the connection
    $Connection->close();
}

function InsertNewUser()
{
  if($_POST['password']===$_POST['password1']){ // check to see if something was send via POST
if ( isset( $_POST["first-name"] ))
{
    echo "<p></p>\n";

$Connection = DatabaseConnect();



$SQL = "insert into user_profile( first_name, last_name, email, password ) value (";
$SQL .= "\"".$_POST['first-name']."\"";
$SQL .= ",\"".$_POST['last-name']."\"";
$SQL .= ",\"".$_POST['email']."\"";
$SQL .= ",\"".$_POST['password']."\"";
$SQL .= ");";
$Results = $Connection->query( $SQL );
if ( $Results )
{
    echo "<p>You have Succefully Created an Account </p>\n";
}
else
{
    echo "<p>Email already in use</p>\n";
}     
// close the connection
$Connection->close(); 


}
else
{
    echo "<p>Nothing to insert</p>\n";
}
}else{
echo"<p>Passwords did not match</p>";
}
}
function PaymentInfo(){
	if ( isset( $_POST["first-name"] ))
{
    echo "<p>Thank you!</p>\n";


    foreach( $_POST as $Key => $Value )
    {
        // echo out the result
        echo "<p>".$Key.": ".$Value."</p>\n";
    
}$Connection = DatabaseConnect();


$SQL = "insert into payment_Info( email,cardholder_fname , cardholder_lname, card_number,ExpDate, ccv,billing_street,billing_state,billing_zipcode ) value (";
$SQL .= "\"".$_SESSION['login_user']."\"";
$SQL .= ",\"".$_POST['first-name']."\"";
$SQL .= ",\"".$_POST['last-name']."\"";
$SQL .= ",\"".$_POST['cardnum']."\"";
$SQL .= ",\"".$_POST['expdate']."\"";
$SQL .= ",\"".$_POST['ccv']."\"";
$SQL .= ",\"".$_POST['billingaddress']."\"";
$SQL .= ",\"".$_POST['states']."\"";
$SQL .= ",\"".$_POST['zipcode']."\"";
$SQL .= ");";
$Results = $Connection->query( $SQL );
if ( $Results )
{
    echo "<p>You have Succefully added a payment method</p>\n";
}
else
{
    echo "<p>There was an error. Try Again</p>\n";
}
$Connection->close(); 
}
else
{
    // no post data notify the user
    echo "<p>Nothing to insert</p>\n";
}
function RemoveUser(){
if(isset($_POST["dpassword"])){
	echo"<p>Work</p>";
	}
$Connection=DatabaseConnect();
$SQL="delete from user_profile;";
}
}
?>
