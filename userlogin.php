
<!DOCTYPE html>
<head>
  <style>
    .contain{
    background-color: white; padding: 19px;margin: 12px 0;border: 1px solid;
    cursor: pointer;margin-right: 400px;margin-left: 188px;color: black;width: 181px;height: 61px;background: darkolivegreen; margin-top: 51px;
    }
    .mid{
    background-color: #DCDCDC;
    height: 1000px;
    width: 653px;
    margin-left: 383px;
    margin-top: 110px;
    }
    .btnn{
  background-color: lightgray;width: 136px;height: 43px;
    font-family: cursive;margin-top: -12px;font-size: 24px;  
    }
    .forgot{
    background-color: #DCDCDC;height: 77px;width: 188px;margin-left: 423px;
    margin-top: -84px;font-family: cursive;
  }
  
.h1{
    font-family: cursive;font-size: 40px;
    }
  .b1{
  background-color: whitesmoke;height: 27px;  font-size: 18px;border-radius: 30px;border: 1px solid;
  } 

  .div1 input[type=text]{
  background-color: white;font-size: 20px;width: 390px;border-radius: 40px;height:44px;border: 1px solid;box-shadow: 0px 0px 10px;
  } 
  .div1 button[type=submit]{
  width: 20%;
    height: 48px;
    background-color: white;
    font-family: cursive;
    font-size: 25px;
    padding: 0px;
    border: 1px solid;
    box-shadow: 0px 0px 10px;
    margin-left: 5px;
  }
  </style>
  <link rel="stylesheet" href="css/userlogin.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/preorder.css">
 
  </head>

<body>
 <div class="header">

    <div class="header_logo_div">
         <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>

   

    <div class="header-right" style="font-family: cursive">
      
 <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="userlogin.php"><b>Login</b></a>


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
  <!--end of the code for display category -->
</div>


 <div class="mid">
 
  <form action="userlogin_sql.php" method="post">

<br>
<br>
<br>






   
    <center><h2 class="h1">User Login Form</h2></center>
    <p style="font-family: cursive;font-size: 25px" >If you have an account, login with your email address.</p>
<table>
  <tr>
   
<br>
<br>


  
  

<center>
  <div  class="div1">
    <label for="mail"></label>
    <input type="text" placeholder="&nbsp&nbsp Enter your email.." name="mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" maxlength="30" required />
<br><br></br><br>


<br>

    <label for="psw"><b></b></label>

    <input style="background-color: white;font-size: 20px;width: 390px;border-radius: 40px;height:44px;border: 1px solid;box-shadow: 0px 0px 10px"  type="password" placeholder="&nbsp&nbsp Enter your password.." name="psw" maxlength="8" required /><br><br>
</br><br>

    
<br>

        
    <button class="btn2" type="submit" name="button1"><b>Login</b></button>
    

</form>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</center>
<br>
<br>
<br>
<br>

  <div class="contain" >


    <a href="usertype.php ?>"><button class="btnn" type="button" class="cancelbtn"><b>Cancel</b></button></a>
    </div>



    <div class="forgot" >
    <span class="psw">Forgot <a href="forgotpass.php">password?</a></span>
    <br>
    <span class="psw">Don't have an account? <a href="signup.php">Register Now!</a></span>
  </div>
</tr>
  </table>
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
