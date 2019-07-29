

<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .div1{
   background-color: whitesmoke;box-shadow: 0px 0px 10px;width: 1020px;margin-left: 168px;
    }
    .div2{
    width: 786px;font-size: 31px;font-family: cursive;font-weight: bolder;
    margin-left: 352px;
    }
    .div3{
    font-family: cursive;font-size: 25px;font-weight: bolder;   background-color: whitesmoke;width: 400px;margin-left: 436px;margin-top: -147px;
    }
    .div4{
    background-color: beige;height: 50px;width: 179px;font-family: cursive; font-size: 22px;font-weight: bolder;box-shadow: 0px 0px 10px; margin-left: 394px;
    }
    .div5{
  background-color: beige;font-family: cursive; height: 50px;width: 179px;box-shadow: 0px 0px 10px;font-size: 22px;margin-left: 11px;
    }
    .div6{
   background-color: wheat;
    height: 216px;
    width: 200px;
    margin-left: 44px;
    margin-top: -61px;
    font-size: 50px;
    font-family: cursive;
    color: rebeccapurple;
    border: 1px solid;
    box-shadow: 0px 0px 10px;
    }
  </style>
  <link rel="stylesheet" href="css/home.css">

  
</head>
<body>
<div class="header">

    <div class="header_logo_div">
        <img src="image/images (1).png" style="height: 60px; width: 150px">
    </div>

   

    <div class="header-right" style="font-family: cursive">
      
     
    <a href="cateshoww.php"><b>Category</b></a>
      <a href="brand.php"><b>Brand</b></a>
       <a href="product.php"><b>Product</b></a>
       <a href="account.php"><b>Account</b></a>
       <a href="order_rq.php"><b>View Order</b></a>
       <a href="report_sell.php"><b>Report</b></a>
       <a href="logout.php"><b>Logout</b></a>
       
       
           

      
     
    
    
  </div>
</div>
<div style="box-shadow: 0px 0px 10px">
<div class="div1" >
<br>
	<br>

<!--code for dropdown -->
<div>
		<form action="" method="post">
			<div class="div2" ">
 <label>Brand Name</label>
      <input style="height: 47px;box-shadow: 0px 0px 10px;width: 300px;border: 1px solid;border-radius: 25px;background-color: beige" type="dropdown" name="b_name" list="b_name" class="" required>
        <datalist id="b_name">
          <?php 
            $sql=mysqli_query($conn, "SELECT * FROM brand");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['brand_name'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
        </div>
<!--end of the code for dropdown -->
        <br>
      

<button class="div6" type="button" class="submitbtn"onclick="printDiv('ppp')"><b>Print</b></button></a>


<div class="div3" ">
	
	From:&nbsp;<input style="height: 33px;font-size: 20px;box-shadow: 0px 0px 10px;width: 223px;border: 1px solid;border-radius: 25px" type="date" name="fdate" required><br>

  To:&nbsp;&nbsp;&nbsp;<input style="height: 33px;font-size: 20px;box-shadow: 0px 0px 10px;width: 223px;border: 1px solid;border-radius: 25px" type="date" name="tdate" required>

</div>

<br>
<br>


<button class="div4" name="search">Search</button> 

   <a href="report_sell.php"><button class="div5" class="csh" type="button" class="submitbtn"><b>Refresh</b></button></a>
</div>


 </form>
<br>
<br>
<div id="ppp">
<?php



?>

<?php

$q="SELECT * FROM orders, order_item WHERE orders.order_id=order_item.order_id";
$result=mysqli_query($conn, $q);



echo" <table  width = 1000 border = 2 cellspacing = 10 cellpadding = 8 style='font-family:Arial, Helvetica, sans-serif'> <tr align = center  style = 'background-color:#D6EAF8 ;'>
<tr align = center  style = 'background-color:wheat ;color:black;font-weight:bold;'>
<th>Order ID</th>
<th>User Name</th>
<th>Address</th>
<th>Product Name</th>
<th>Brand Name</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Order Date</th>
</tr>";

$qty=0;
$totalp=0;


if(isset($_POST['search']))

{
$b_name=$_POST['b_name'];
$from_date = $_POST['fdate'];
$to_date = $_POST['tdate'];

$result = mysqli_query($conn, "SELECT * FROM orders, order_item WHERE orders.order_id=order_item.order_id AND order_item.b_name='$b_name' AND orders.order_date>= '$from_date' AND orders.order_date<= '$to_date'");

while($row=mysqli_fetch_array($result)){
	
		echo" <tr>";
		echo" <td align='center'>".$row['order_id']. " </td>";
		echo" <td align='center'>".$row['name']. " </td>";
		echo" <td align='center'>".$row['address']. " </td>";
		echo" <td align='center'>".$row['p_name']. " </td>";
		echo" <td align='center'>".$row['b_name']. " </td>";
		echo" <td align='center'>".$row['quantity']. " </td>";
		echo" <td align='center'>".$row['total_price']. " </td>";
		echo" <td align='center'>".$row['order_date']. " </td>";
		echo" </tr>";
		$qty +=$row['quantity'];
		$totalp +=$row['total_price'];
	
	
}
}

else {
	$result = mysqli_query($conn, "SELECT * FROM orders, order_item WHERE orders.order_id=order_item.order_id");
  


while($row=mysqli_fetch_array($result)){
  
    echo" <tr>";
    echo" <td align='center'>".$row['order_id']. " </td>";
    echo" <td align='center'>".$row['name']. " </td>";
    echo" <td align='center'>".$row['address']. " </td>";
    echo" <td align='center'>".$row['p_name']. " </td>";
    echo" <td align='center'>".$row['b_name']. " </td>";
    echo" <td align='center'>".$row['quantity']. " </td>";
    echo" <td align='center'>".$row['total_price']. " </td>";
    echo" <td align='center'>".$row['order_date']. " </td>";
    echo" </tr>";
    $qty +=$row['quantity'];
    $totalp +=$row['total_price'];
  
  
}
}


	
echo "<tr style = 'background-color:wheat  ;'> <td colspan = 7 align = right style='font-weight:bold;color:black;' >Total Quantity : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$qty;
echo " </tr> ";

echo "<tr style = 'background-color:wheat  ;'> <td colspan = 7 align = right style='font-weight:bold;color:black'>Total Price : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong>  </font>".$totalp;

echo " </tr> ";




echo "</table>";



mysqli_close($conn);

 ?>


	</div>




 <br>
 <br>


<?php 
?>

<br>
 <br><br>
 <br>


    <script>
  function printDiv(div_name) {
     var printContents = document.getElementById(div_name).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</div>
</div>


</div>
</div>


 <hr>

                  <div class="footer">

<div class="fleft">
        <center> <h4  style="font-family: cursive;font-size: 20px" >LINKS</h4></center>
       <hr>
          <ul class="links">
            
  
           <a href="admincategory.php">Shop Now</a><br>
          <a href="cart .php">Cart</a><br>
            <a href="usertype.php">Login</a><br>
          </ul>
                     </div>



             <div class="fmiddle">
       <center> <h4  style="font-family: cursive;font-size: 20px" > SUPPORT</h4></center>
       <hr>
          <ul class="links">
            
  
           <a href="faq.php">FAQ</a><br>
          <a href="about.php">About us</a><br>
            <a href="contact.php">Contact Us</a><br>
          </ul>
                     </div>









 <div class="fright">
        
          <center><h4 style="font-family: cursive;font-size: 20px"  >POLICIES</h4></center>
          <hr>
          <ul class="links">
            <a href="terms_of_use.php">Terms of Use</a><br>
            <a href="privacy_policy.php">Privacy Policy</a><br>
            <a href="happy_return.php">Happy Return</a>
            
          </ul>
        </div>
        <div class="fnew"  >
          <img src="image/w6.png" style="height: 270px;
    width: 295px;margin-top: -177px">
          
        </div>
      </div>
<hr>
<div class="bellow2">
 
  

        <br>
                     

  <span class="psw"><center>Follow Us At</span>    <br>    
          <img class="twiter"  src="image/white-twitter-icon-png-11.png">
          <img class="google"  src="image/google.ico">
          <img class="youtube"  src="image/youtube1.png">
          
          <img class="blog"  src="image/blog.png">
          <img class="facebook" src="image/facebook.jpg"> 
          <img class="linkedin" src="image/linked.png">
        </center>
   <br>

        <span style="font-weight: bold;font-size: 20px" class="psw"><center>All Rights Reserved by@<b>Fatema Tuz Zohura</a></span>
</div>


</div>
</body>
</html>
