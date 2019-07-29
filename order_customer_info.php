
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

    <div class="search-container">
        <form style="padding-top: 5%; margin-left: 15%;" action="/action_page.php">
            <input type="text" placeholder="Search here..." name="search">
          <button type="submit">Submit</button>
        </form>
    </div>

    <div class="header-right" style="font-family: cursive;width: 58%">



      <a style="font-size: 23px" href="admincategory.php"><b>Shop Now</b></a>
      
      <a style="font-size: 23px" href="customer_information.php"><b><?php echo $_SESSION['email']; ?></b></a>
     
       <a style="font-size: 23px" href="order.php"><b>Order</b></a>

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






<div style="height: 800px;background-color: whitesmoke" >



<center>
<form  action="Order_update_pro.php" method="post" style = "width: 617px;background-color: #DCDCDC;height: 700px">
   <input type="hidden" name="id" value="">
  <br>
    <br>
    <br>
    <h1 align = center class = "f" style="font-family: cursive;font-size: 40px">My Profile </h1>

    <br>
    
    <div class="input-group">
      <label > Name:</label> 
      <input type="text" placeholder="Please enter your name"name="customername" value = "<?php echo $row[1] ?>" required>
    </div>
    <br>
    <br>
    <br>

   
    
    <div class="input-group">
      <label >Conatct:</label>
      <input type="text" placeholder="Please enter your Mobile No"name="contact" pattern='^\+?\d{11}'value = "<?php echo $row[3] ?>" required>
       <br>
    <br>
    <br>
    </div>
    <div class="input-group">
      <label >Email:</label>
      <input type="text" placeholder="Please enter your Email"name="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" value = "<?php echo $row[4] ?>"required>
    </div> 
     <br>
    <br>
    <br>

     <div class="input-group">
      <label >Password:</label>
      <input type="text" placeholder="Please enter your Email"name="psw" value = "<?php echo $row[5] ?>"required>
    </div> 
     <br>
    <br>
    <br>
    <div class="input-group">
      <label >Address</label> 
      <input type="text" placeholder="Please enter your address" name="address" value = "<?php echo $row[2] ?>" required>
    </div>


    <div class="div"> 
    <button style="    background-color: lightgray;width: 136px;height: 43px;font-family: cursive;
    margin-top: -12px;font-size: 24px" type="submit" name="update"class="btn">Update</button>
    </div>
</div>
<?php
}


?>
</form>
</center>




 <div class="offer" style="background-color: whitesmoke; height: 145px;text-align: center;width: 1349px;">
  <hr>
  <br>
 
   <form action="contact_sql.php" method="post">
     <label  style="font-family: cursive;font-size: 22px;color: black" for="pay_code">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Great offers, Direct to your inbox and stay one step ahead</label> <br><br>
 
 &nbsp;&nbsp;&nbsp;&nbsp;

<input  style="background-color: white; border: 1px solid; font-size: 18px;width: 400px;font-family: cursive;height: 40px"  type="text" placeholder="Enter your Email " name="pay_code" maxlength="30" required /><br></br>

<button style="background-color: aquamarine;
    margin-left: 359px" name="confrm_btn"> Send</button>

   </form>
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
