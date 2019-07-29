<!DOCTYPE html>
<html>
<head>
  <style>

</style>
</head>



  <link rel="stylesheet" href="css/preorder.css">

  

<body>
<div class="header">

    <div class="header_logo_div">
         <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>


    <div class="header-right">
      
      <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="usertype.php"><b>Login</b></a>


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




        <button class="bname" ><?php echo $row1['brand_name']; ?></button>

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

<!--end of the for display category -->




<!--code for preorder page -->

<?php  include('connection.php'); ?>
<?php 

$product_name= $_POST['p_name'];
$product_id= $_POST['product_id'];
$category_name= $_POST['c_name'];
$brand_name= $_POST['b_name'];
$price= $_POST['price'];
$quantity= $_POST['quantity'];
$image= $_POST['image'];


?>

<div >

 <div class="middle">
    <div class="pic" >


        <div class=" div_pic" >

          <img  style="width: 166%;height: 300%;margin-top: -60px;margin-left: -49px;border: 1px solid" src="uploads/<?php echo $image; ?>" alt="Girl in a jacket" >
        
        </div>

    </div>



       <div class="des">


             <div class="name">
              <h1><?php echo $product_name; ?></h1>
              <p><b>Product Code: </b><i><?php echo $product_id; ?></i></p>
              <p><b>Category: </b><i><?php echo $category_name; ?></i></p>
                <p><b>Brand: </b><i><?php echo $brand_name; ?></i></p>
                
          
             </div>


                  <div class="price">
                    <p>  <i>Price: Tk.<?php echo $price; ?></i></p>
               
                   </div>


                        <div class="qnty" >
                          <p><b>Quantity:</b></p>
                    
                        </div>


                        
                        <!--Code for Cart.php-->


        <div class="cart">
                  <form action="cart .php" method="post">
                  <input type="hidden" name="p_id" value="<?php echo $product_id; ?>">
                  <input type="hidden" name="p_name" value="<?php echo $product_name; ?>">
                  <input type="hidden" name="b_name" value="<?php echo $brand_name; ?>">
                  <input type="hidden" name="price" value="<?php echo $price; ?>">
                               
        <div class="qnty2">
    <input type = 'number' min = '1' max = "<?php echo $quantity;?>" value = '0' name = "quantity" size = 2>&nbsp;&nbsp; Available:&nbsp; &nbsp;<input type 'text'  value = "<?php echo $quantity; ?>" name = 'c' size = 1 readonly> 
        </div>

  <input type="hidden" name="image" value="<?php echo $image; ?>">
 <input class="add_cart_btn" type="submit" name="submit" value="Add To Cart">

 
                              </form>
                               
                            
<?php
           $sql2 = mysqli_query($conn, "SELECT description FROM brand WHERE brand_name='$brand_name'");
              $row2=mysqli_fetch_array($sql2);

                ?>

<div class="details">
  <p><b>Product Description:</b><br> <br><?php echo $row2['description']; ?></i></p>
  
</div>

</div>
</div>
</div>


 <!--Code for display new product-->
<div class="display">

  
 <center> <h2  class="rcom">Recommended For You</h2></center>
<div class="row">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM product ORDER BY product_id DESC LIMIT 4 ");
        while ($row=mysqli_fetch_array($sql)) {
        ?>
        <div class="col">
          <a href=""><img class="pp_image" src="uploads/<?php echo $row['image'] ?>"   alt="Image"></a>
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
              
<div class="vclass" ><button class="bclass" class="view"  name="view_btn">View</butto
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


</div>
<!--end of the Code for display new product-->

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
