<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    
    .order{
          background-color: whitesmoke;
    height: 7000px;
    width: 1123px;
    margin-left: 126px;
    padding: 27px;
    box-shadow: 0px 0px 10px;
    }
    .div1{
    background-color: red;height: 50px;width: 77px;font-size: 18px;color: white;
    }
    .div2{
  background-color: darkgreen;height: 50px;width: 77px;font-size: 18px;color: white;
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
<div style="background-color: whitesmoke">
<div class="order">
  <br>
  <br>
  <br>
  



<?php 

  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM product WHERE product_id=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      
      $name = $n['name'];
      $description = $n['description'];
      $price = $n['price'];
      $quantity = $n['quantity'];
      $image = $n['image'];
     
    }
  }
?>


<?php
$status="Active"; 
 $results = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_id DESC"); 

?>

<table border= 2 >
  <thead>
    <tr style="text-align: center;background-color: wheat;height: 60px">
    <th>Order Id</th>
      <th> User Name</th>
      <th>Address</th>
      <th>City</th>
       <th>Contact</th>
      <th>Total Price</th>
      <th>Payment</th>
        <th>Status</th>
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <?php 
        $o_id=$row['order_id'];
         ?>
    <tr style="text-align: center">
      <td><?php echo $row['order_id']; ?></a></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['city_name']; ?></td>
       <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['order_amount']; ?></td>
      <td><?php echo $row['payment']; ?></td>
      <td><?php echo $row['status']; ?></td>
      
  <form action="order_rq_sql.php" method="POST">
      <td>
        <!-- <a href="order_sql.php?o_id_approve=<?php #echo $row['o_id']; ?>" class="edit_btn" >Approve</a> -->
       
        <input type="hidden" name="o_id" value="<?php echo $row['order_id']; ?>">
        <?php
        $o_id=$row['order_id'];
         $sql_check="SELECT status FROM orders WHERE order_id='$o_id'";
         $result_check=mysqli_query($conn, $sql_check);
         $logic=false;
         while ($row=mysqli_fetch_array($result_check)) {
          if ($row['status']==1) {
            $logic=true;
          }
          else{
            $logic=false;
          }
         }

         if ($logic==false) { ?>
           <button class="div2" class="edit_btn" name="approve_btn">Accept</button>
        <?php }
        else{ ?>
           
       <?php }


         ?>
      </td>
     <td>
        <!-- <a href="order_sql.php?o_id_reject=<?php# echo $row['o_id']; ?>" class="del_btn" onclick="return confirm('Are you sure want to delete?');">Reject</a> -->
        <button class="div1" class="del_btn" name="reject_btn" onclick="return confirm('Are you sure want to delete?');">Reject</button>
        <a href="view.php?order_id=<?php echo $o_id; ?>" style="background-color: blue;height: 50px;width: 77px;font-size: 18px;color: white;">View</a>
      </td>
  </form>
    </tr>
  <?php } ?>
</table>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


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
