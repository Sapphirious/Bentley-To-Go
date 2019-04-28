<?php
session_start();
include_once("config.php");
    require "../../../project.inc";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<h1 align="center">Order ID:</h1> 
<div class="cart-view-table-back">
<form method="post" action="cart_update.php">
<table width="100%"  cellpadding="6" cellspacing="0"><thead><tr><th>Quantity</th><th>Name</th><th>Price</th><th>Total</th></tr></thead>
  <tbody>
 	<?php
	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$product_name = $cart_itm["product_name"];
			$product_qty = $cart_itm["product_qty"];
			$product_price = $cart_itm["product_price"];
			$product_code = $cart_itm["product_code"];
			$product_color = $cart_itm["product_color"];
			$subtotal = ($product_price * $product_qty); //calculate Price x Qty
		   	$bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
		    echo '<tr class="'.$bg_color.'">';
			echo '<td>'.$product_qty.'</td>';
			echo '<td>'.$product_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
            		echo '</tr>';
			$total = ($total + $subtotal); //add subtotal to total var
			
			$Connection = DatabaseConnect();
			$SQL = "insert into cart( item_id, email, quantity) values (";
			$SQL .= "\"".$product_code."\"";
			$SQL .= ",\"".$_SESSION['login_user']."\"";
			$SQL .= ",\"".$product_qty."\"";
			$SQL .= ");";
			$Results = $Connection->query( $SQL );  
			$Connection->close(); 
        }
		
		$grand_total = $total + $shipping_cost; //grand total including shipping cost
		foreach($taxes as $key => $value){ //list and calculate all taxes in array
				$tax_amount     = round($total * ($value / 100));
				$tax_item[$key] = $tax_amount;
				$grand_total    = $grand_total + $tax_amount;  //add tax val to grand total
		}
		
		$list_tax       = '';
		foreach($tax_item as $key => $value){ //List all taxes
			$list_tax .= $key. ' : '. $currency. sprintf("%01.2f", $value).'<br />';
		}
		$shipping_cost= ($shipping_cost)?'Quick Order Charge : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	}
    ?>

    <tr><td colspan="5"><span style="float:right;text-align: right;"><?php echo $shipping_cost. $list_tax; ?>Amount Payable : $<?php echo sprintf("%01.2f", $grand_total);?></span></td></tr>
    <tr><td colspan="5"><a a href="../../homepage.php" class="button">Return Home</a></td></tr>
  </tbody>
</table>
<input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>

</body>
</html>

