<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <style>
  .container2{
  background-color: white;
    padding: 19px;
    margin: 12px 0;
    border: 1px solid;
    cursor: pointer;
    color: black;
    height: 60px;
    width: 310px;
    background: darkolivegreen;
    margin-left: 660px;
    margin-top: 86px;
  }
  .btnpay{
 background-color: whitesmoke;
    height: 284px;
    width: 644px;
    margin-top: -276px;
    margin-left: 131px;
    text-align: center;
  }
  .payment{
      background-color: whitesmoke;
    height: 107px;
    width: 372px;
    margin-left: 625px;
    margin-top: 91px;
    padding: 35px;
    font-size: 24px;
    font-family: cursive;
    box-shadow: 0px 0px 10px;
}
  .need_help{
 background-color: whitesmoke;
    height: 50px;
    width: 266px;
    margin-top: -196px;
    margin-left: 124px;
    
  }
  .contact{
 background-color: whitesmoke;
    height: 50px;
    width: 103px;
    margin-left: 389px;
    font-family: initial;
    margin-top: -65px;
    text-decoration: none;
  }
  .contain{
  background-color: white;
    padding: 19px;
    margin: 12px 0;
    border: 1px solid;
    cursor: pointer;
    color: black;
    height: 60px;
    width: 310px;
    background: darkolivegreen;
   margin-top: -33px;
    margin-left: -6px;
  }
  .contain2{
    background-color: white;
    padding: 19px;
    margin: 12px 0;
    border: 1px solid;
    cursor: pointer;
    color: black;
    height: 60px;
    width: 310px;
    background: darkolivegreen;
    margin-left: 645px;
    margin-top: 144px;
}
  .csh1{
    font-family: cursive;
    margin-top: -15px;
    font-size: 30px;
    border-radius: 30pc;
    margin-left: -10px;
    width: 298px;
    height: 50px;
  }
  .csh{
      background-color: lightgray;
    width: 293px;
    height: 45px;
    font-family: cursive;
    margin-top: -12px;
    font-size: 28px;
    margin-left: -8px;
    border-radius: 30px;
  }
.btnn{
background-color: darkolivegreen;
    height: 91px;
    width: 278px;
    margin-left: 314px;
    cursor: pointer;
    margin-top: 10px;
    border: 1px solid;
    border-radius: 49px;
  }  
  .middle{
  height: 580px;box-shadow: 0px 0px 10px;
  }
  .b1{
   background-color: whitesmoke;height: 27px;  font-size: 18px;border-radius: 30px;border: 1px solid;
  }
</style>
</head>



  <link rel="stylesheet" href="css/preorder.css">

  

<body>

<div class="header">

    <div class="header_logo_div">
          <a href="index.php"> <img src="image/images (1).png" style="height: 60px; margin-top: -10px;width: 150px"></a>
    </div>


    <div class="header-right" style="font-family: cursive">
      
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




        <button class="b1"><?php echo $row1['brand_name']; ?></button>

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
<!--end of the code for display category -->

<!--code for cart.php -->
<div class="middle">

<h1 style="font-size: 30px;font-family: cursive">  My Shopping Cart</h1>
<hr>
<br>
<br>
<br>
<?php



include 'connection.php';

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

	if(isset($_POST['submit']))
	{
			
			$p_id = $_POST['p_id'];
			$p_name = $_POST['p_name'];
			$b_name = $_POST['b_name'];
			$image = $_POST['image'];
			

					$q = "select * from product where product_id = $p_id ";
					
	
					$result = mysqli_query($conn,  $q) ;

					while($r = mysqli_fetch_row($result))
					{
						$items[] = $r;				
					}


		$itemArray = array($items[0][0]=>array('proid' => $items[0][0],'p_name' => $items[0][1], 'b_name' => $items[0][3], 'quan'=>$_POST["quantity"], 'price'=>$items[0][4], 'image'=> $items[0][6]));
		
		$_SESSION['cart'] += $itemArray;
		
		
	}
	


			elseif(empty($_SESSION['cart']))
			{				
				echo "<h2>Oopppss!!! Your Shopping Cart is empty.....</h2>";
			}
	

			elseif(isset($_GET['action']))
			{
				foreach($_SESSION["cart"] as $k => $v) 
				{
					if($_GET["id"] == $k)
					{
						unset($_SESSION["cart"][$k]);				
						
					}
					
				}	
					if(empty($_SESSION['cart']))
					{
			
						echo "<h2>No Items</h2>";
			
					}
				
	}


	
	
echo "<table  width = 1050  cellspacing = 10 cellpadding = 8 style='font-family:Arial, Helvetica, sans-serif'> <tr align = center  style = 'background-color:#D6EAF8  ;'>";

echo "<b><td> <strong>Product Code <td> <strong> Image<td> <strong>Product Name  <td> <strong> Brand Name  <td><strong><strong> Unit Price <td><strong> Qty <td> <strong>Sub Total </td> <td><strong> Action </td> <tr>";

	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['proid'];
	$tp = $item['quan'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['proid'];
	echo "<td align = 'center'><img src = 'uploads/".$item['image']."' height = 80 width = 100>";
	echo "<td align = 'center'> ".$item['p_name'];
	echo "<td align = 'center'> ".$item['b_name'];
	echo "<td align = 'center'>Tk. ".$item['price'];
	echo "<td align = 'center'> ".$item['quan'];	
	echo "<td align = 'center'>Tk.".$tp;
	echo "<td align = 'center'> <a href ='cart .php?action&id=$i'> Remove </a> </td>";
	echo "<tr>";
	
	
}

	echo "</tr>";
	
	echo "<td> </tr></table>";		
	

?>
<!--end of the code for cart.php -->
<br>
<br>


    <div class="contain">
<a href="admincategory.php ?>"><button class="csh" type="button" class="submitbtn"><b>Continue Shopping</b></button></a>
      </div>
</div>


<!-- code for display price -->
    <div class="payment">

    <?php

echo "</tr>";

  echo "<tr style = 'background-color:#D6EAF8  ;'> <td colspan = 7  align = right> Grand Total &nbsp Tk.<td align = 'center'> <font style = 'font-family:cursive'>  </font>".$tp2;;
	
	echo "<td> </tr></table>";	
?>
<br>


</div>
<!-- end of the code for display price -->


<div style="box-shadow: 0px 0px 10px">
        <div class="need_help" ><p>Need Help? +88 096 06 77 11 55 or</p>
	       </div>

        <div class="contact" >
	      <a href="contact.php"><p><i>Contact Us</i></p></a>
	      </div>
</div>

<div class="contain2">
<a href="order.php ?>"><button class="csh1" type="button" class="submitbtn"><b>Continue Payment </b></button></a>
   </div> 
      
    
   

<br>
<br>



  </div>
</form>
</div>
</div>

<br><br>
<br><br>
<br>


 <!--Code for display new product-->
<div class="display">

  
 <center> <h2 style="box-shadow: 0px 0px 10px" class="rcom">Recommended For You</h2></center>
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
