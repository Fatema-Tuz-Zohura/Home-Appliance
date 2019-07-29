<?php  include('connection.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <style>
  .div{
    background-color: white;
        padding: 19px;
    margin: 12px 0;
    border: 1px solid;
    cursor: pointer;
    margin-right: 400px;
    margin-left: 188px;
    color: black;
    width: 181px;
    height: 61px;
    background: darkolivegreen;
    margin-top: 51px;
  }
  
  </style>
  </head>
  <link rel="stylesheet" href="css/customer_information.css">
<link rel="stylesheet" href="css/preorder.css">

  

<body>
<div class="header">

    <div class="header_logo_div">
          <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>


    <div class="header-right" style="width: 89%;margin-top: 4px">

     <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
       <a href="customer_information.php"><b>My Profile</b></a>
       <a href="myorder.php"><b>My Order</b></a>
       <a href="order.php"><b>Order</b></a>
      <a href="userlogout.php"><b>Logout</b></a>
       
</div>
</div>


<!--display category -->
<?php  include('connection.php'); ?>
<div class="middle2">
    <div class="row1">

<!--code for dropdown -->


      <?php

        $sql = mysqli_query($conn, "SELECT * FROM category");
          while ($row=mysqli_fetch_array($sql)) {
            $c_id=$row['category_id'];
             $c_image=$row['image'];
             $c_description=$row['description'];
             ?>


             <div class="dropdown" style="float: left;">
            <button class="dropbtn"><?php echo $row['c_name']; ?></button>



            <div class="dropdown-content">
              <?php
           $sql1 = mysqli_query($conn, "SELECT * FROM brand WHERE category_id=$c_id");
              while ($row1=mysqli_fetch_array($sql1)) {
                ?>



        <form action="categorynext.php" method="post">
        <input type="hidden" name="brand_name" value="<?php echo $row1['brand_name']; ?>">
        <input type="hidden" name="category_image" value="<?php echo $c_image; ?>">
        <input type="hidden" name="category_description" value="<?php echo $c_description;?>"> 




        <button style="background-color: whitesmoke;height: 27px;  font-size: 18px;border-radius: 30px;border: 1px solid" ><?php echo $row1['brand_name']; ?></button>

      </form>
                <?php
                  }
                      ?>
        
         </div>
      
      </div>
                   <?php
                      }
                     ?>

  </div>
</div>




   <?php



if(!isset($_SESSION['email']))
{

echo "<h2>Please Login first...........</h2>";

}
else
{

$e = $_SESSION['email'];

include 'connection.php';

$result = mysqli_query($conn, "SELECT * from user where email= '$e' ");

$row = mysqli_fetch_row($result);

?>
<br>
<br>
<br>
<br>
<br>





<div style="height: 830px;background-color: whitesmoke" >



<center>
<form  action="updateProfile.php" method="post" style = "width: 617px;background-color: #DCDCDC;height: 730px;box-shadow: 0px 0px 10px">
   <input type="hidden" name="id" value="">
  <br>
    <br>
    <br>
    <h1 align = center class = "f" style="font-family: cursive;font-size: 40px">My Profile </h1>

    <br>
    
    <div class="input-group" style="font-size: 22px;font-weight: bold" >
      <label > Name:</label> 
      <input style="width: 192px;height: 37px;background-color: #DCDCDC" type="text" placeholder="Please enter your name"name="customername" value = "<?php echo $row[1] ?>" required>
    </div>
    <br>
    <br>
    <br>

   
    
    <div class="input-group" style="font-size: 22px;font-weight: bold">
      <label >Conatct:</label>
      <input style="width: 192px;height: 37px;background-color: #DCDCDC" type="text" placeholder="Please enter your Mobile No"name="contact" pattern='^\+?\d{11}'value = "<?php echo $row[3] ?>" required>
       <br>
    <br>
    <br>
    </div>
    <div class="input-group" style="font-size: 22px;font-weight: bold">
      <label >Email:</label>
      <input style="width: 272px;height: 37px;background-color: #DCDCDC" type="text" placeholder="Please enter your Email"name="email"  value = "<?php echo $row[4] ?>"required>
    </div> 
     <br>
    <br>
    <br>

     <div class="input-group" style="font-size: 22px;font-weight: bold">
      <label >Password:</label>
      <input style="width: 192px;height: 37px;background-color: #DCDCDC" type="text" placeholder="Please enter your Email"name="psw" value = "<?php echo $row[5] ?>"required>
    </div> 
     <br>
    <br>
    <br>
    <div class="input-group" style="font-size: 22px;font-weight: bold">
      <label >Address</label> 
      <input style="width: 192px;height: 37px;background-color: #DCDCDC" type="text" placeholder="Please enter your address" name="address" value = "<?php echo $row[2] ?>" required>
    </div>


    <div class="div" > 
    <button style="    background-color: lightgray;width: 136px;height: 43px;font-family: cursive;margin-top: -12px;font-size: 24px" type="submit" name="update"class="btn">Update</button>
    <a style="text-decoration: none;color: darkolivegreen;font-weight: bold;margin-left: 303px;font-size: 27px" href="index2.php">Back</a><br>
    </div>
</div>
<?php
}


?>
</form>
</center>








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
