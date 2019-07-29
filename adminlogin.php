
<!DOCTYPE html>
<head>
<style>
  .middle1 button[type=submit]{
width: 20%;height: 40px;background-color: white;font-family: cursive;font-size: 25px;
  }

.middle1 input[type=text]{
background-color: white;font-size: 20px;width: 390px;border-radius: 40px;height:44px;border: 1px solid;box-shadow: 0px 0px 10px;
}

.middle1 input[type=password]{
background-color: white;font-size: 20px;width: 390px;border-radius: 40px;height:44px;border: 1px solid;box-shadow: 0px 0px 10px;
}
.b1{
background-color: whitesmoke;height: 27px;  font-size: 18px;border-radius: 30px;border: 1px solid;
}
.b2{
background-color: lightgray;
    width: 136px;height: 43px;font-family: cursive;margin-top: -12px;
    font-size: 24px;
}
.h1{
font-family: cursive;font-size: 40px;
}
</style>
  
  <link rel="stylesheet" href="css/preorder.css">
   <link rel="stylesheet" href="css/adminlog.css">
 
  </head>

<body>
 <div class="header">

    <div class="header_logo_div">
         <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>

  
    <div class="header-right" style="font-family: cursive">
     
      <a href="admincategory.php"><b>Category</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="logout.php"><b>Logout</b></a>

      
     
    
   
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




        <button class="b1" ><?php echo $row1['brand_name']; ?></button>

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


<br>
<br>
<br>
<br>
<br>


<div style="height: 800px;background-color: whitesmoke">
 <div class="middle1" >
  <form action="adminlogin_sql.php" method="post">

<br>
<br>
<br>

    <center><h2 class="h1">Login Form</h2></center>
<table>
 <br>
<br>
<tr>
  <center>
 
    <label for="mail"></label>
    <input type="text" placeholder="&nbsp&nbsp Enter your email" name="mail"pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" maxlength="30" required />
<br><br></br><br>


<br>

    <label for="psw"><b></b></label>

    <input type="password" placeholder="&nbsp&nbsp Enter your password" name="psw" maxlength="30" required /><br><br>
</br><br>

    
<br>

        
 <button class="b1" type="submit" name="button1"><b>Login</b></button>
    

</form>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  
</center>
<br>
<br>
<br>
<br>

  <div class="container2" >
    <a href="usertype.php ?>"><button class="b2" type="button" class="cancelbtn"><b>Cancel</b></button></a>
    
    
  </div>
</tr>
  </table>
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
                     

  <span class="psww" style="text-align: center"><center>Follow Us At</span>    <br>    
          <img class="twiter"  src="image/white-twitter-icon-png-11.png">
          <img class="google"  src="image/google.ico">
          <img class="youtube"  src="image/youtube1.png">
          
          <img class="blog"  src="image/blog.png">
          <img class="facebook" src="image/facebook.jpg"> 
          <img class="linkedin" src="image/linked.png">
        </center>
   <br>

        <span style="font-weight: bold;font-size: 20px" class="psww" style="text-align: center"><center>All Rights Reserved by@<b>Fatema Tuz Zohura</a></span>
</div>


</div>
</body>
</html>
