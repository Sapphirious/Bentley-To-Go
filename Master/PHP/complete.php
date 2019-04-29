<?php
    require ("../project.inc");
function CompleteOrder()
{
    // check to see if something was send via POST
if ( isset( $_POST["order_id"] ))
{
    // post data has been sent
    echo "<p>Order Completed</p>\n";

    // write out the data sent
    echo "<p>Following order has been completed:</p>\n";


    foreach( $_POST as $Key => $Value )
    {
        // echo out the result
        echo "<p>".$Key.": ".$Value."</p>\n";
    }
$Connection = DatabaseConnect();

$id=$_POST["order_id"];
$sql="select order_id from cart where order_id=\"".$id."\";";
$SQL = "delete from cart where order_id=\"".$id."\";";
$Results = $Connection->query( $SQL );
if ( $Results )
{
    // success message
    echo "<p>Congratulations</p>\n";
}
else
{
    // error message
    echo "<p>Error with completion</p>\n";
}     
// close the connection
$Connection->close(); 


}
else
{
    // no post data notify the user
    echo "<p>Nothing to delete</p>\n";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Complete</title>

</head>
<body>
<?php
    // call the insert function
    CompleteOrder();
?>
<a href="../PHP/admininfo.php">Return to Main Page</a>
</body>
</html>

