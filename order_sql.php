

<?php
  
session_start();

include 'connection.php';


$odt = date("dmyH:i:s A");


if(isset($_SESSION['email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

$em = $_SESSION['email'];

}

if(isset($_POST['submit']))
{

$uname = $_POST['uname'];

$email = $_POST['mail'];

$address =  $_POST['address'];

$contact = $_POST['contact'];

$payment = $_POST['payment'];
$city_name = $_POST['city_name'];



$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;
	
}

	
if ($payment==$tp2) {
$r = mysqli_query($conn,"INSERT INTO orders(name, contact,city_name,email, address,payment, order_amount,order_date,Email_id, temp) VALUES('$uname', '$contact','$city_name', '$email', '$address','$payment','$tp2',NOW(),'$em', '$odt')") or die("Failed to Insert ");


foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quan'] * $item['price'];
		$tp2 += $tp;

	$que = "INSERT INTO order_item(product_id,b_name, p_name,  price, quantity, total_price,temp) values('".$item['proid']."','".$item['b_name']."', '".$item['p_name']."', '".$item['price']."', '".$item['quan']."', '".$tp."','".$odt."')";
	
	mysqli_query($conn, $que) or die("Failed ");
	
}


$r2 = mysqli_query($conn,"SELECT order_id from orders WHERE temp = '$odt'");



	while($row = mysqli_fetch_row($r2))
	{
		$oid = $row['0'];		
	}
	
mysqli_query($conn,"update order_item set order_id = '$oid' where temp = '$odt'");

mysqli_query($conn,"update order_item set temp = '' where order_id = '$oid'");

mysqli_query($conn,"update orders set temp = '' where order_id = '$oid'");

if($r2)
{
	echo "<hr>";
	
	echo "<h1 align = center> Thank you for Shopping </h1> <br><br> <h2 align = center> Your order Request has successfully sent.</h2> <br> <h3 align = center>Please check your <b color=blue>Email</b> after sometime</h3> <h4 align = center> Your Order id is : ".$oid. "</h4>";
	
	unset($_SESSION["cart"]);
	
}

else
{
	echo "<h2>Order Failed</h2>";
	
}

mysqli_close($conn);
}
else
{
		echo "<script>alert('Payment is not Matched!!'); window.location='order.php'</script>";
}

}

?>