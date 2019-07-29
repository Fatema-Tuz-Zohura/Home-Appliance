<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/Home.css">

  
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

    <div class="header-right">
      
      <a href="home.php"><b>Home</b></a>
       <a href="admincategory.php"><b>Category</b></a>

   




     
       <a href="#"><b>Order</b></a>
           

      
     
    
    <a href="usertype.php"><b>Login</b></a>
  </div>
</div>
<br>
<br>
<br>

<?php  include('connection.php'); ?>
<div class="about_pic"style="background-color: gray;height: 400px">
      <img style="width: 100%; height: 100%;" src="image/ab.png" alt="">>
  
</div>



 <div class="middle">
  <div class="middle1" style="margin-right: 15px; margin-left: 15px;background-color: #b35900;height: 600px">
    <center>
      <br>
      <br>
  <h2 style="font-size: 30px; font-family: Arial;font-weight: bold;color: black">About Us</h2>

    <p style="text-align: justify; font-family: Times New Roman; font-size: 20px;margin-left: 15px;
  margin-right: 15px;margin-top: 10px">
       It is not just sell lifestyle products, it is here to become a lifestyle!. Be it simple, casual or luxurious; trendy, unique or traditional, it presents you all. Daily lives, occasions, needs and necessities, celebrations, desires and wish lists –  checks it all off. We believe life is not made up of days but each day is a realm of life, where every second is a different color and every color represents ! </p>


 <p style="text-align: justify; font-family: Times New Roman; font-size: 20px;margin-left: 15px;
  margin-right: 15px;margin-top: 10px">we are here to be a part of their lives, not just by selling the brands which rest under their hood but also by writing a part of their daily life stories.

It is that little spark of fun springing out of a droning afternoon, that unconscious twist of hair made while losing yourself in thoughts of wonderland, rocking the floor with confidence being no one but yourself or the three sips of tea turning into a moment of a lifetime with the right people – it is all Bagd</p> <br>
    <p style="text-align: justify; font-family: Times New Roman; font-size: 20px;margin-left: 15px;
  margin-right: 15px;margin-top: 10px">
We present a one-stop lifestyle platform, holding products of various local and international brands together. The different deals offered whole year round, lets buyers get the best products at lowest prices and the sellers promote and build their brands big.
    </p>
  
</div>
      </div>

                
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
