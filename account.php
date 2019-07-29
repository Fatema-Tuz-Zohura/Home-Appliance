
<!DOCTYPE html>
<html>
<head>
  <style>
    
    .order{
          background-color: whitesmoke;
    height: 1400px;
    width: 967px;
    margin-left: 196px;
    padding: 27px;
    box-shadow: 0px 0px 10px;
    }
    .div1{
     font-family: cursive;
    border-radius: 44px;
    height: 60px;
    font-weight: bold;
    width: 298px;
    background-color: darkolivegreen;
    margin-left: 20px;
    margin-top: 39px;
    font-size: 30px;
    border: 1px solid;
    box-shadow: 0px 0px 10px;"
    }
    .tex1{
    background-color: lightgray;width: 550px;height: 250px;margin-top: 61px;border: 1px solid;box-shadow: 0px 0px 10px;
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
<div style="background-color: lightgray;box-shadow: 0px 0px 10px">
<div class="order">
  <br>
  <br>
  <br>
  


<?php include 'connection.php';?>





<table border= 2 >
  <thead>
    <tr style="text-align: center;background-color: wheat;font-size: 18px">
    <th>SL</th>
    <th>User Id</th>
      <th> User Name</th>
      <th>Address</th>
       <th>contact</th>
      <th>Email</th>
      <th>Create Date</th>
    
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM user";
    $result=mysqli_query($conn, $sql);
    $sl=1;
    while ($row=mysqli_fetch_array($result)) {
    ?>
    <tr style="text-align: center;font-size: 17px">
      <td><?php echo $sl++; ?></td>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['contact']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['create_date']; ?></td>
      <td>
        <?php
        if ($row['status']==1) { ?>
        <a href="account.php?user_id=<?php echo $row['user_id']; ?>" style="background-color: darkgreen; height: 50px;width: 77px;color: white" class="edit_btn">Block</a>
       <?php }
       else
       { ?>
        <a href="block_sql.php?un_user_id=<?php echo $row['user_id']; ?>" style="background-color: red; height: 50px;width: 77px;color: white" class="edit_btn">Unblock</a>
      <?php }
        ?>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
  </table>

  <!-- code for blocking reason dekhanor jnno -->

<?php
if (isset($_GET['user_id']))
 {

  $user_id=$_GET['user_id'];
$sql=mysqli_query($conn, "SELECT email FROM user WHERE user_id='$user_id'");
$row=mysqli_fetch_array($sql);
$cus_email=$row['email'];
  ?>
<div>
  <form action="block_sql.php" method="post">
    <input type="hidden" name="email" value="<?php echo $cus_email; ?>">
    <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
<textarea class="tex1" name="block_reason" id="" cols="30" rows="10" required></textarea><br>

    <button class="div1">Block this Person</button>
</div>

<?php
}
?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <!-- end of the code for blocking reason dekhanor jnno -->

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
