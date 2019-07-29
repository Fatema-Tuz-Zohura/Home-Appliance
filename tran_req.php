
<!DOCTYPE html>
<html>
<head>
  <style>
    
    .order{
          background-color: whitesmoke;
    height: 600px;
    width: 967px;
    margin-left: 196px;
    padding: 27px;
    }
  </style>
  <link rel="stylesheet" href="css/home.css">

  
</head>
<body>
<div class="header">

    <div class="header_logo_div">
        <img src="image/images (1).png" style="height: 60px; width: 150px">
    </div>

    <div class="search-container">
        <form style="padding-top: 5%; margin-left: 15%;" action="/action_page.php">
            <input type="text" placeholder="Search here..." name="search">
          <button type="submit">Submit</button>
        </form>
    </div>

    <div class="header-right" style="font-family: cursive">
      
<a href="cateshoww.php"><b>Category</b></a>
      <a href="brand.php"><b>Brand</b></a>
       <a href="product.php"><b>Product</b></a>
       <a href="order_rq.php"><b>Order</b></a>
       <a href="#"><b>Report</b></a>
       
       


  </div>
</div>

<div class="order">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


<?php include 'connection.php';?>
<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM transaction WHERE product_id=$id");

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
 $results = mysqli_query($conn, "SELECT * FROM orders, order_item WHERE orders.order_id=order_item.order_id"); ?>

<table>
  <thead>
    <tr style="text-align: center">
    <th> Id</th>
      <th> Transaction Code</th>
      
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <?php 
        $t_id=$row['t_id'];
         ?>
    <tr style="text-align: center">
      <td><?php echo $row['t_id']; ?></a></td>
      <td><?php echo $row['t_code']; ?></td>
      
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



                  <div class="footer">

<div class="fleft">
        <center><h4>NAVIGATION</h4></center>
          <ul class="links">
           
           <a href="#"><b>Category</a><br>
          <a href="#">Product</a><br>
            
          <a href="#">Report</a><br>
          </ul>
                     </div>


             <div class="fmiddle">
       <center> <h4> CUSTOMER SUPPORT</h4></center>
          <ul class="links">
            
  
           <a href="faq.php">FAQ</a><br>
          <a href="about.php">About us</a><br>
            <a href="contact.php">Contact Us</a><br>
          </ul>
                     </div>









 <div class="fright">
        
          <center><h4>POLICIES</h4></center>
          <ul class="links">
            <a href="terms_of_use.php">Terms of Use</a><br>
            <a href="privacy_policy.php">Privacy Policy</a><br>
            <a href="happy_return.php">Happy Return</a>
            
          </ul>
        </div>
      </div>

<div class="bellow2" style="height:  153px">
  <br>
<br>
<br>

  <span class="psw"><center>All Rights Reserved by@<a href="forgotpass.php"><b>Fatema Tuz Zohura</a></span>

        <br>
                     

          
          <img class="twiter"  src="image/white-twitter-icon-png-11.png">
          <img class="google"  src="image/google.ico">
          <img class="youtube"  src="image/youtube1.png">
          
          <img class="blog"  src="image/blog.png">
          <img class="facebook" src="image/facebook.jpg"> 
          <img class="linkedin" src="image/linked.png">
        </center>
</div>


</div>
</body>
</html>


              

