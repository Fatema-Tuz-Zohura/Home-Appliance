<?php include 'connection.php';?>
<?php 
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}

 ?>
<?php  
//variables to hold our submitted data with post
	$order_id = $_POST['o_id'];

	$status = 1;
	$result=mysqli_query($conn, "SELECT name, email FROM orders WHERE order_id='$order_id'");
	while ($row=mysqli_fetch_array($result)) {
		$mail=$row['email'];
		$name=$row['name'];
	}

	if (isset($_POST['approve_btn']) && isset($mail)) {
		$sql="UPDATE orders SET status='$status' WHERE order_id='$order_id'";
		$sql2="UPDATE order_item SET status='$status' WHERE order_id='$order_id'";
		// query for geting ordered quantity

		$sql3=mysqli_query($conn, "SELECT quantity, product_id FROM order_item WHERE order_id='$order_id'");
		$row_qty=mysqli_fetch_array($sql3);
		$ordered_quantity=$row_qty['quantity'];
		$ordered_pro_id=$row_qty['product_id'];


			// query for geting product quantity
		$sql4=mysqli_query($conn, "SELECT quantity FROM product WHERE product_id='$ordered_pro_id'");
		$row_pro_qty=mysqli_fetch_array($sql4);
		$pro_quantity=$row_pro_qty['quantity'];
$r=$pro_quantity-$ordered_quantity;
		// decrease quantity;

		mysqli_query($conn, "UPDATE product SET quantity='$r' WHERE product_id='$ordered_pro_id'");

		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo "<script>alert('Order request has been send successfuly!!!'); window.location='order_rq.php'</script>";
		// code for send confirmation mail
		
		$subject="Order Confirmation";

        $message="Assalamualikum  {$name}, Your Order has been Completed.You Will Receive Your Parcel Within 4 Days.Thank You";

        $headers="From: noreply@ors.com";
        

        send_email($mail,$subject,$message,$headers);

		// END of mailing code

		}
		else{
			echo "Not Updated";
		}

	}


	if (isset($_POST['reject_btn']) && isset($mail)) {
		$sql_amount=mysqli_query($conn, "SELECT order_amount FROM orders WHERE order_id='$order_id'");
		$row_amount=mysqli_fetch_array($sql_amount);
		$refund_amount=$row_amount['order_amount'];
		$sql="DELETE FROM orders WHERE order_id='$order_id'";
		$sql2="DELETE FROM order_item WHERE order_id='$order_id'";
		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
		echo "<script>alert('Order has been Cancled!!!'); window.location='order_rq.php'</script>";
		// code for send confirmation mail
		$subject="Order Confirmation";

        $message="Assalamualikum {$name},  Your Order has been Cancled. Your sent amount {$refund_amount} TK will refund within next 3 hours.";

        $headers="From: noreply@ors.com";
        

        send_email($mail,$subject,$message,$headers);

		// END of mailing code

		}
		else{
			echo "Not Reject";
		}

	}
	

?>
