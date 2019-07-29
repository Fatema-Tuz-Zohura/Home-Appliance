<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .mid{
    background-color: lightgray;
    height: 219px;
    width: 1073px;
    margin-left: 145px;
  box-shadow: 0px 0px 10px;
    border: 1px solid;

}
.payy{
  background-color: lightgray;
    height: 160px;
    width: 599px;
   margin-left: 550px;
    margin-top: 15px;
     box-shadow: 0px 0px 10px;
}
.aaa{
  background-color: lightgray;
    height: 773px;
    width: 440px;
    margin-left: 96px;
    margin-top: 75px;
   box-shadow: 0px 0px 10px;

}
.tab{
  background-color: lightgray;
    height: 300px;
    width: 700px;
    margin-top: -750px;
    margin-left: 550px;
   box-shadow: 0px 0px 10px;
}
  .btnn{
background-color: darkolivegreen;
    height: 105px;
    width: 291px;
    margin-left: 711px;
    cursor: pointer;
    margin-top: 25px;
    border: 1px solid;
    border-radius: 31px;
     box-shadow: 0px 0px 10px;
  } 
  .div{
  background-color: whitesmoke;height: 27px;  font-size: 18px;border-radius: 30px;border: 1px solid;
  } 
  .middle3
  {
 height: 800px;box-shadow: 0px 0px 10px;
  }

  .p1{
  font-size: 25px;font-family: cursive;background-color: lightgray; color:black; padding:5px;
  }
  .aaa input[type=text]{
  background-color: white;font-size: 19px;width: 336px;border-radius: 40px;box-shadow: 0px 0px 10px;border: 1px solid;height: 38px;
  }
.payy input[type=text]{
   border: 1px solid;background-color: white; font-size: 19px;width: 336px;border-radius: 40px;box-shadow: 0px 0px 10px;margin-left: 126px;margin-top: 5px;height: 83px;
  }
  </style>
  <link rel="stylesheet" href="css/preorder.css">

  
</head>
<body>
<div class="header">

    <div class="header_logo_div">
          <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>

  

    <div class="header-right" style="font-family: cursive;width: 50%">
      
     <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
    
      
      <a href="userlogin.php"><b>Login</b></a>




  </div>
</div>

<div style="background-color: whitesmoke;height: 1200px">




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




        <button class="div1"><?php echo $row1['brand_name']; ?></button>

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
<!--end of the code for dropdown -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="mid">
  <img src="image/on1.png" style=" width: 1073px;height: 219px;box-shadow: 0px 0px 10px">
  
</div>

<div class="middle3">
<!-- start of the code for order -->


<?php



include 'connection.php';

if(isset($_SESSION['email']))
{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

?>

  <form action="order_sql.php" method="post">
  <div class="aaa">
    <!-- code for billing address -->

    <h2 style="font-family: cursive;font-size: 25px">Biling Address</h2>
<p style="font-family: cursive;font-size: 20px">Please Fill out your information</p>


<hr>
</br><br>
    <label   for="uname"></label>
    <input    type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Enter your name" name="uname" pattern="^[a-zA-Z'. -]+$"  maxlength="30" required /><br></br><br >
   

    <label for="mail"></label>
    <input  type="text" class="mail"placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Enter your Email" name="mail" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" maxlength="30"required /><br></br><br>

   
    <label for="contact"></label>
    <input class="contact" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Enter your number" name="contact" pattern="[\+?[\d -\(\)]*]" maxlength="12"  required 
    /><br></br><br>

<label for="city"></label>
      
<input style="border: 1px solid;background-color: white; font-size: 19px;width: 336px;border-radius: 40px;box-shadow: 0px 0px 10px;height: 38px" type="dropdown" name="city_name" list="city_name" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Enter your city" class="">
        <datalist id="city_name">
          <?php include'connection.php'; ?>
          <?php 
            $sql=mysqli_query($conn, "SELECT * FROM city");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['city_name'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
   
</br><br>

<br>
    <br>

    <label for="address"></label>
    <input  type="textarea" style="border: 1px solid;box-shadow: 0px 0px 10px;width: 340px;font-size: 19px; height: 133px;margin-left: 6px;border-radius: 30px" class="textarea"  placeholder="&nbsp;&nbsp;i.e house#47,road#10,sector#10,uttara" name="address" maxlength="100"  required 
    /><br></br><br>

 
 <!-- end of the code for billing address -->


  </div>
 
   <!-- code for order summery -->

<div class="tab">
  <table>
  <tr>
          
          <td colspan="5"><strong><p class="p1">Order Summery </p></strong></td>
        </tr>
        <tr>
          

<?php


echo "<table cellspacing = 6 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:white;'>";

echo "<b><td> <strong> Product Name<td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";   
  
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
  
  $i = $item['proid'];
  $tp = $item['quan'] * $item['price'];
  $tp2 += $tp;

  
  
  echo "<td align = 'center'> ".$item['p_name'];
  
  echo "<td align = 'center'>Tk. ".$item['price'];
  echo "<td align = 'center'> ".$item['quan'];  
  echo "<td align = 'center'>Tk.".$tp;
  
  echo "<tr>";
  
  
}

  echo "</tr>";
  echo "<tr style = 'background-color:white;border:1px solid'> <td colspan = 3 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>".$tp2;;
  echo "<td> </tr></table>"; 

?>        


  </td>
        </tr>
        
        
   <div>
    <br>

<input type="checkbox" name="agreed" required>I accept the <a href="#" onClick="MyWindow=window.open('terms_of_use.php','MyWindow',width=100,height=800); return false;"><u><i>Terms & Conditions</i><u></a>
</div>

      </table>
    </div>
   <!-- end of the code for order summery -->




    <div class="payy">
      
   <!-- code for payment -->

    <label for="payment"></label>
   <h2 style="font-family: cursive;color: maroon">&nbsp;&nbsp;&nbsp;&nbsp;To Continue Order Please Pay Your Payment</h2>

    <input  type="text" value="" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your payment" name="payment"pattern="\+?[\d -\(\)]*"   required 
    /><br>
    </div>
<!-- end of the code for payment -->


     <div class="btnn">
<button  style="height: 90px;width: 270px;background-color:mediumaquamarine;margin-left: 11px;margin-top: 7px;font-size: 40px;border-radius: 28px;font-weight: bold;font-family: cursive; box-shadow: 0px 0px 10px;border: 1px solid;" name="submit" type="submit" > <a href="order_sql.php"></a>Place Order</button>
            </div>
   

  </div>
 </div>
</form>

</div>

<?php 
}

else
  
{
  echo "<h2 style = 'font-family:cursive;font-size:30px;background-color:whitesmoke;height:109px'> Welcome to Our World! Please Login First......</h2>";

}


?>

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
