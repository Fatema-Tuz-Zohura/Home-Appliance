<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    
    .order{
          background-color: whitesmoke;
    height: 1400px;
    width: 1100px;
    margin-left: 126px;
    padding: 27px;
    box-shadow: 0px 0px 10px;
    }
  </style>
  <link rel="stylesheet" href="css/preorder.css">

  
</head>
<body>
<div class="header">

    <div class="header_logo_div">
        <img src="image/images (1).png" style="height: 60px; width: 150px">
    </div>

  

    <div class="header-right" style="font-family: cursive;width: 75%">
      
  <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
       <a href="customer_information.php"><b>My Profile</b></a>
       <a href="myorder.php"><b>My Order</b></a>
       <a href="order.php"><b>Order</b></a>
      <a href="userlogout.php"><b>Logout</b></a>
       
       


  </div>
</div>
  <br>
  <br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style="background-color: whitesmoke">
<div class="order">
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
 //$results = mysqli_query($conn, "SELECT * FROM orders, order_item WHERE orders.order_id=order_item.order_id"); 

$u_email=$_SESSION['email'];

// $u_email="dmsbappy@gmail.com";
 $results = mysqli_query($conn, "SELECT * FROM orders WHERE email='$u_email'"); 
?>

<table style="width: 699px; margin-left: 160px;margin-left: 160px;box-shadow: 0px 0px 10px;background-color: ;" border= 2 >
  <thead>
    <tr style="height: 50px;background-color: wheat">
    <th>Order Id</th>
       <th>Order Amount</th>
       <th>Order Date</th>
       <th>Order Status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $current_user_mail=$_SESSION['email'];
  $results=mysqli_query($conn, "SELECT * FROM orders WHERE email='$current_user_mail'");
  while ($row = mysqli_fetch_array($results)) { 
         ?> 
    <tr style="text-align: center">
      <td><a href="customer_order_pro_view.php?o_id=<?php echo $row['order_id']; ?>"><?php echo $row['order_id']; ?></a></td>
      <td><?php echo $row['order_amount']; ?></td>
       <td><?php echo $row['order_date']; ?></td>
       <?php
       if ($row['status']==1) { ?>

       <td style="color: green;">Approved</td>

        <?php
       }
       else
       { ?>
        
       <td style="color: red;">Pending</td>
        <?php
       }
       ?>
    </tr>
    <?php

  }
    ?>
    </tbody>
</table>

</div>



</div>

</div>


 <hr>

                  <div class="footer">

<div class="fleft">
        <center> <h4  style="color: white;font-family: cursive;  font-size: 20px" >LINKS</h4></center>
       <hr>
          <ul class="links">
            
  
           <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="admincategory.php">Shop Now</a><br>
          <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="cart .php">Cart</a><br>
            <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="usertype.php">Login</a><br>
          </ul>
                     </div>



             <div class="fmiddle">
       <center> <h4  style="color: white;font-family: cursive;font-size: 20px" > SUPPORT</h4></center>
       <hr>
          <ul class="links">
            
  
           <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="faq.php">FAQ</a><br>
          <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="about.php">About us</a><br>
            <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="contact.php">Contact Us</a><br>
          </ul>
                     </div>









 <div class="fright">
        
          <center><h4 style="color: white; font-family: cursive;font-size: 20px;font-weight: bold"  >POLICIES</h4></center>
          <hr>
          <ul class="links">
            <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="terms_of_use.php">Terms of Use</a><br>
            <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="privacy_policy.php">Privacy Policy</a><br>
            <a style="text-decoration: none;color: #CCCACD;font-size: 17px" href="happy_return.php">Happy Return</a>
            
          </ul>
        </div>
        <div class="fnew"  >
          
          <img src="image/w.jpg" style="height: 170px;width: 176px;margin-left: 40px;margin-top: -169px;border-radius: 105px
    ">
    <p style="color: #CCCACD;font-size: 18px;text-align: left"> 100% ORIGINAL guarantee for all products </p>
    </div>
</div>

<div class="share">

  <p style="font-size: 15px;color: maroon;padding: 26px">Home Appliance Shopping Center to be the first ever online platform that offers buying and selling in bangladesh. It will be the fastest growing ecommerce platform in Bangladesh offering an unparalleled shopping experience at the comfort of your home.You can enjoy convenient and hassle free shopping without rushing to the stores. Home Appliance Center promises to take your style statement to a whole new level by having a wide variety of products, categories and brands on board.</p>
  
</div>



<hr>
<div class="bellow2">
 
  <div class="info">
    <br>

<center>
              <h3 style="font-family: cursive"><b>Company Information</b></h3>
             <p>House#7, Road#11, Sector#10, Uttara.</p> 
                  <p>Dhaka-1230, Bangladesh.</p></center>
            <p>Email: <span><a href="ggg:@example.com">fatematuzzohura95@gmail.com</a></span></p>
     

  </div>
<div class="pay">

    <label  style="font-family: cursive;font-size: 25px;color: black;font-weight: bold" for="pay_code">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get in Touch</label> 
          <img class="twiter"  src="image/white-twitter-icon-png-11.png">
          <img class="google"  src="image/google.ico">
          <img class="youtube"  src="image/youtube1.png">
          
          <img class="blog"  src="image/blog.png">
          <img class="facebook" src="image/facebook.jpg"> 
          <img class="linkedin" src="image/linked.png">
        </center>
       
</div>
<div class="writ">
        <span class="psw"><center>All Rights Reserved by@<b>Fatema Tuz Zohura</a></span>
  
        </div>
</div>


</div>
</body>
</html>
