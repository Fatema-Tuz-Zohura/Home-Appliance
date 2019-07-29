<!DOCTYPE html>
<html>
<head>
  <style>
    
    .middle1{
background-color: whitesmoke;
height: 800px;
}   
.container{
  background-color: #DCDCDC;
  height: 800px;
  width: 600px;
  margin-left: 332px;
}

.btn{
      background-color: lightgray;
    height: 64px;
    width: 171px;
    margin-left: 123px;
    font-family: cursive;
    border: 1px solid;
    cursor: pointer;
    color: black;
    margin-top: 24px;
    background: darkolivegreen;
}

  </style>
  <link rel="stylesheet" href="css/style.css">


<body>


<div  class="header">
  <div class="header_logo_div">
        <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>
   
    <div class="header-right">
      
       
   <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
     <a href="userlogout.php"><b>Logout</b></a>



      
     
    
    
      
      </div>
</div>



  </div>




<form action="resetpass_sql.php" method="post">
        <?php 
        $mail=$_GET['mail'];    
          
         ?>

    
<table>
  <tr>
   
<br>
<br>
<br>
<br>
<br>
<br>

  
  


  <div class="middle1">
    <br>
    <br>
    <br>
    <br>
    <br>

        <div class="container">
          <br>
          <br>
          <center>  <h2 style="font-family: cursive;font-size: 40px">Reset Your Password</h2>



<input style="background-color: white;margin-top: 41px;margin-left: -2px;height: 60px;width: 398px;font-size: 17px;box-shadow: 0px 0px 10px;border-radius: 40px;border: 1px solid" type="text" value="<?php echo $mail; ?>" name="mail" readonly>


    <label for="psw"></label>
    <input style="background-color: white;margin-top: 80px;margin-left: -2px;height: 42px;width: 398px;font-size: 20px;border-radius: 40px;border: 1px solid;box-shadow: 0px 0px 10px"  type="password" placeholder="Enter your new password" name="psw"  maxlength="30" /><br><br></br><br>








<br>
<br>





    <div class="btn">

      <a href="#"><button  style="background-color: lightgray;width: 151px;height: 43px;box-shadow: 0px 0px 10px; border: 1px solid; font-family: cursive;margin-top: 9px;font-size: 24px;margin-left: 6px" type="submit" name="button1"class="submitbtn"><b>Submit</b></button>
  




        </div>

  </div>




        
   
    



<br>
<br>
<br>
<br>

  
</tr>
  </table>
</form>

</div>


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
