<?php
    require "../project.inc";
function InsertNewFeedback()
{
    // check to see if something was send via POST
if ( isset( $_POST["first-name"] ))
{
    // post data has been sent
    echo "<p>Thank you!</p>\n";

    // write out the data sent
    echo "<p>Following feedback has been submitted:</p>\n";


    foreach( $_POST as $Key => $Value )
    {
        // echo out the result
        echo "<p>".$Key.": ".$Value."</p>\n";
    }
$Connection = DatabaseConnect();



$SQL = "insert into feedback_users( first_name, last_name, email, comments ) value (";
$SQL .= "\"".$_POST['first-name']."\"";
$SQL .= ",\"".$_POST['last-name']."\"";
$SQL .= ",\"".$_POST['email']."\"";
$SQL .= ",\"".$_POST['comments']."\"";
$SQL .= ");";
$Results = $Connection->query( $SQL );
if ( $Results )
{
    // success message
    echo "<p>Thank you, for submitting your valuable feedback. We strive to improve our service to valued customers based on your feedback</p>\n";
}
else
{
    // error message
    echo "<p>Error with insert</p>\n";
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
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>Feedback</h1>
<?php
    // call the insert function
    InsertNewFeedback();
?>
<a href="../HTML/home.html">Return to Main Page</a>
</body>
</html>

