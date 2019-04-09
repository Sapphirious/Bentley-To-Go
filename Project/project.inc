<?php

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
    
    // make a select statement to get data from the database
    $SQL = "select first_name, last_name, email, comments from feedback_users;";

    // execute the query
    //      use the query method of the $Connection object
    $Results = $Connection->query( $SQL );

    // check for results
    //      $Results will evaluate to true if there data is returned
    //      from the database, false if no data is returned
    if ( $Results )
    {
        // start the table HTML
        echo " <table>\n";

        // add the HTML for a table header row
        echo "   <thead>\n";
        echo "      <th>First Name</th>\n";
        echo "      <th>Last Name</th>\n";
        echo "      <th>Email</th>\n";
        echo "      <th>Comments</th>\n";
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
        echo "</table> \n";
    }
    else
    {
        // no results returned
        echo "<p>No results returned from the query</p>\n";
    }

    // close the connection
    $Connection->close();
}
function InsertNewUser()
{
    // check to see if something was send via POST
if ( isset( $_POST["first-name"] ))
{
    // post data has been sent
    echo "<p>Thank you!</p>\n";

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
    // success message
    echo "<p>You have Succefully Created an Account</p>\n";
}
else
{
    // error message
    echo "<p>Email already in use</p>\n";
}     
// close the connection
$Connection->close(); 


}
else
{
    // no post data notify the user
    echo "<p>Nothing to insert</p>\n";
}
}

?>
