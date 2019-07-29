
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/preorder.css">

  
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
      
     
       <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Order</b></a>
      <a href="order_userlogin.php"><b>Login</b></a>




  </div>
</div>



<div class="middle2" style="  height: 1000px">



<?php

session_start();

include 'connection.php';

if(isset($_SESSION['email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

?>

  <form action="order_sql.php" method="post">
  <div class="aaa" style="background-color: lightgray;height: 800px;width: 400px;margin-left: 71px">

    <h2 style="font-family: cursive;font-size: 30px">1.Biling Address</h2>
<p style="font-family: cursive;font-size: 20px">Please Fill out your information</p>


<hr>
    <label   for="uname"></label>
    <input  style="background-color: white;font-size: 19px;width: 336px;border-radius: 40px;height: 38px"  type="text" placeholder="Enter your name" name="uname"  maxlength="30" required /><br></br><br >
   
    <br>
    <br>

    <label for="mail"></label>
    <input  type="text" class="mail" style="background-color: white;font-size: 19px;width: 336px;border-radius: 40px;height: 38px" placeholder="Enter your Email" name="mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" maxlength="30"required /><br></br><br>

    <br>
    <br>

    <label for="contact"></label>
    <input class="contact" style="background-color: white; font-size: 19px;width: 336px;border-radius: 40px;
  height: 38px" type="text" placeholder="Enter your number" name="contact" maxlength="12"  required 
    /><br></br><br>





<br>
    <br>

    <label for="address"></label>
    <input  type="textarea" class="textarea"  placeholder="Enter your full address" name="address" maxlength="100"  required 
    /><br></br><br>




  </div>
 
   <div class="bbb" style="background-color: lightgray;height: 273px;width: 400px;margin-top: -824px;
    margin-left: 482px">


       <h2 style="font-family: cursive;font-size: 30px">2.Delivery Method</h2>
<p style="font-family: cursive;font-size: 20px">Please fillup your address to find the delivery charge.</p>
    

  </div>

<div class="ccc" style="background-color: lightgray;height: 270px;width: 406px;margin-left: 894px;margin-top: -296px">


       <h2 style="font-family: cursive;font-size: 30px">3.Payment Method</h2>
<p style="font-family: cursive;font-size: 20px">Pay cash when you receive the product</p>
    
  </div>
  

    
  </div>



 </div>

<div>
  <table>
  <tr>
          
          <td colspan="5"><strong><p style = "background-color:#5D6D7E  ; color:white; padding:5px;">Your order </p></strong></td>
        </tr>
        <tr>
          

<?php


echo "<table cellspacing = 6 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:#e8e9e7;'>";

echo "<b><td> <strong> Product Name<td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";   
  
$tp2 = 0;
$tp3=60;
foreach ($_SESSION["cart"] as $item)
{
  
  $i = $item['proid'];
  $tp = $item['quan'] * $item['price'];
  $tp2 += $tp;
$tp3 += $tp;
  
  
  echo "<td align = 'center'> ".$item['p_name'];
  echo "<td align = 'center'>Tk. ".$item['price'];
  echo "<td align = 'center'> ".$item['quan'];  
  echo "<td align = 'center'>Tk.".$tp;
  echo "<tr>";
  
  
}

  echo "</tr>";
  echo "<tr style = 'background-color:#e8e9e7;border:1px solid'> <td colspan = 3 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>".$tp3;;
  echo "<td> </tr></table>"; 

?>        


  </td>
        </tr>
        <div >
             <button name="submit" type="submit" > <a href="order_sql.php"></a>SUbmit</button>
            </div>
       
      </table>
</form>

</div>

<?php 
}

else
  
{
  echo "<h2 style = 'color:red;'> Welcome  to Our World.Please Login.....</h2>";

}


?>

</div>




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


              