<!DOCTYPE html>
<html>
<style>
  .btn{
    background-color: darkolivegreen;
    height: 72px;
    width: 278px;
    margin-left: 77px;
    cursor: pointer;
    margin-top: 10px;
    border: 1px solid;
  }
  .container{
  background-color: whitesmoke;width: 600px;height: 650px;box-shadow: 0px 0px 10px;margin-left: -99px;
  }
  .h1{
font-family: cursive;color: maroon;box-shadow: 0px 0px 10px;
  }
  .container input[type=text]{
  width: 300px;height: 40px;border: 1px solid;box-shadow: 0px 0px 10px;
  }
  .in1{
  font-family: cursive;border-radius: 44px;height: 60px;font-weight: bold;width: 227px;background-color: darkolivegreen;margin-left: 23px;margin-top: 9px;font-size: 30px;border: 1px solid;box-shadow: 0px 0px 10px;
  }
  .middle{
  background-color: gray;height: 400px;
  }
  .img1{
    width: 100%; height: 100%;
  }
</style>
<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css">

  
</head>
<body>
<div class="header">

    <div class="header_logo_div">
       <a href="index.php">  <img src="image/images (1).png" style="height: 60px; width: 150px"></a>
    </div>

    <div class="header-right">
    <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="usertype.php"><b>Login</b></a>
  </div>
</div>


<?php  include('connection.php'); ?>


<div class="middle">
      <img class="img1" src="image/can.jpg" alt="">

</div>


<div class="mid">
  <div class="mid1" >
	<div class="col span_2_of_3">
                  <br>
                  <br>
                  <br>


<div class="container">
  <h2 class="h1">If You Have Any Problem Or Any Query Dont Feel Shy To Contact With Us</h2>

          <form action="contact_sql.php" method="post">
            <br>
            <br>
<input type="text" name="name"  placeholder="Your name.." required>
                  <br>
                  <br>
                  <br>
<input type="text" name="subject"  placeholder="Subject.." required>
                  <br>
                  <br>
                  <br>
<input type="text" name="mail"  placeholder="Your Email Address.." required>
                  <br>
                  <br>
                  <br>
<textarea name="message" placeholder="Write something.." style="height:200px;width: 500px; border: 1px solid;box-shadow: 0px 0px 10px"></textarea>
                <center> 
<input class="in1" type="submit" name="submit" value="Submit">
                </center>
        </form>
            </div>



						   
						</div>
					
				  </div>
  				</div>


          <div class="mid2" >
            <br>
            <br>
            <br>

            <center>
              <h3><b>Company Information :</b></h3>
            <p>Hotline:+8809606771155</p>
              <p>Whatsapp & Viber: 01687713808</p>
            <p>Email: <span><a href="ggg:@example.com">info@gng.com</a></span></p>
      <p>House#7, Road#11, Sector#10, Uttara.</p> 
                  <p>Dhaka-1230, Bangladesh.</p></center>

                  <br>
                  <br>
                  <center>
              <h3><b>Headquarter :</b></h3>
            
              <p>Hotline:+8809606771155</p>
            <p>Email: <span><a href="info@example.com">info@gng.com</a></span></p>
      <p>Chandra, Kaliakoir, Gazipur..</p> 
                  <p>Dhaka-1230, Bangladesh.</p></center>



                  
            
          </div>
	
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
