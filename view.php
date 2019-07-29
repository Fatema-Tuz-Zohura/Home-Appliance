<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    
    .order{
          background-color: whitesmoke;
    height: 500px;
    width: 820px;
    margin-left: 283px;
    padding: 27px;
    box-shadow: 0px 0px 10px;
    }
  </style>
  <link rel="stylesheet" href="css/home.css">

  
</head>
<body>
<br>
<br>
<br>

<div style="background-color: whitesmoke">
<div class="order">
  
<?php
$o_id=$_GET['order_id']; 
 $results = mysqli_query($conn, "SELECT * FROM orders WHERE order_id='$o_id'"); 
 $row=mysqli_fetch_array($results);
 $total_price=$row['order_amount'];

?>
<h2 style="text-align: center">Order ID:<?php echo $o_id; ?></h2>
<h2 style="text-align: center">User Name: <?php echo $row['name']; ?></h2>

<h2 style="font-family: cursive;font-size: 30px;text-align: center;">Ordered Product Details</h2>
<table style="height: 147px;width: 799px;margin-left: -17px;box-shadow: 0px 0px 10px;background-color: aquamarine;" border= 2 >
  <tr>
    <td>SL</td>
    <td>Product ID</td>
    <td>Product Name</td>
    <td>Brand Name</td>
    <td>Quantity</td>
    <td>Unit Price</td>
  </tr>

<?php
 $results2 = mysqli_query($conn, "SELECT * FROM order_item WHERE order_id='$o_id'"); 
 $sl="1";
 while ($row2=mysqli_fetch_array($results2)) { ?>

  <tr>
    <td><?php echo $sl++; ?></td>
    <td><?php echo $row2['product_id']; ?></td>
    <td><?php echo $row2['p_name']; ?></td>
    <td><?php echo $row2['b_name']; ?></td>
    <td><?php echo $row2['quantity']; ?></td>
    <td><?php echo $row2['total_price']; ?></td>
  </tr>
  <?php
 }

?>

</table> 
<br>

<a style="text-decoration: none;color: darkolivegreen;font-weight: bold; margin-left: 570px;font-size: 27px" href="order_rq.php">Back</a><br>

</div>


</div>

</div>




</div>
</body>
</html>
