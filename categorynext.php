<!DOCTYPE html>
<html>
<head>
  <style>



</style>
</head>
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/categorynext.css">

  

<body>
<div class="header">

    <div class="header_logo_div">
          <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>


    <div class="header-right" style="width: 57%">
      
     
       <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="usertype.php"><b>Login</b></a>

  </div>
  </div>

<!--display category name-->
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


             <div class="dropdown" style="float: left">
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




        <button class="bnm" ><?php echo $row1['brand_name']; ?></button>

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
  <!--end of the code for dropdown -->
</div>
  
<!--code for displaying image and description-->


<?php  include('connection.php'); ?>
   <?php
      $c_image=$_POST['category_image'];
      $c_description=$_POST['category_description'];
    ?>



<div class="middle1">
      <img style="width: 100%; height: 100%;" src="image/<?php echo $c_image; ?>" alt="">
</div>

<div class="background-pic" ">

      <br>
  
      <p><center><?php echo $c_description; ?>"</center></p>
</div>

<!--end of the code for displaying image and description-->



<!--code for display product image,name and price -->

 <div class="Category_product" style="height: 1500px">
       <?php
       $b_name=$_POST['brand_name'];
        $sql = mysqli_query($conn, "SELECT * FROM product WHERE brand_name='$b_name'");
        while ($row=mysqli_fetch_array($sql)) {
        ?>

        <div class="image_div" >
           <a><img class="pp_image" src="uploads/<?php echo $row['image'] ?>" alt= "Image"></a>
           <h3 style="color: #00a1b1" align="center"><?php echo $row['name'] ?></h3>
           <center>

           <label style="color: #00a1b1;font-size: 20px" >Tk.<?php echo $row['price'] ?></label>
           
 <!--end of the code for display product image,name and price -->
           <center>

            <!--Form for Preorder.php-->
  <form action="preorder .php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
    <input type="hidden" name="p_name" value="<?php echo $row['name'] ?>">
    <input type="hidden" name="c_name" value="<?php echo $row['c_name'] ?>">
    <input type="hidden" name="b_name" value="<?php echo $row['brand_name'] ?>">
    <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
    <input type="hidden" name="quantity" value="<?php echo $row['quantity'] ?>">
    <input type="hidden" name="image" value="<?php echo $row['image'] ?>">


 <div class="btn" ><button class="bv" class="view"  name="view_btn">View</button>
       
            </form>
          </div>
         
           </center>


       </div>

        <?php
        }
        ?>
 </div >
 <div>
   
 </div>
</div>
<!--end of the code  for Preorder.php-->
<br>
<br>
<br>


 <!--Code for display new product-->
<div class="new_product">
  <br>
  <br>
 <center> <h2 class="head" ">Recommended For You</h2></center>

<div class="row">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM product ORDER BY product_id DESC LIMIT 4 ");
        while ($row=mysqli_fetch_array($sql)) {
        ?>

<div class="col2">

          <a href=""><img class="pp_image" src="uploads/<?php echo $row['image'] ?>" alt="Image"></a>
          <h3 style="color: #00a1b1" align="center"><?php echo $row['name'] ?></h3>
          <center>
          <label style="color: #00a1b1;font-size: 20px" >Tk.<?php echo $row['price'] ?></label><br><br>
            
 <!--Form for Preorder.php-->
      <form action="preorder .php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
        <input type="hidden" name="p_name" value="<?php echo $row['name'] ?>">
        <input type="hidden" name="c_name" value="<?php echo $row['c_name'] ?>">
        <input type="hidden" name="b_name" value="<?php echo $row['brand_name'] ?>">
        <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
        <input type="hidden" name="quantity" value="<?php echo $row['quantity'] ?>">
        <input type="hidden" name="image" value="<?php echo $row['image'] ?>">

<div class="btn" ><button class="bv" class="view"  name="view_btn">View</button>
       
            </form>
          </div>
          
            </form>
          </center>
        </div>
        <?php
      }
      ?>

        
      </div>
        
      </div>

    <!--end of the Code for display new product-->

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
