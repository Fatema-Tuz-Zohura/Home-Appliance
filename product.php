<?php  include('product_sql.php'); ?>

<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $name = $n['name'];
      $c_name = $n['c_name'];
      $brand_name = $n['brand_name'];
      $price = $n['price'];
      $quantity = $n['quantity'];
      $image = $n['image'];
      $description = $n['description'];
     
     
    }
  }
?>



<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="css/product.css">


</head>
<body>
  <div class="header">
    

    <div class="header_logo_div">
        <img src="image/images (1).png" style="height: 60px; width: 150px">
    </div>

   

    <div class="header-right" style="font-family: cursive">
       
 <a href="cateshoww.php"><b>Category</b></a>
      <a href="brand.php"><b>Brand</b></a>
       <a href="product.php"><b>Product</b></a>
       <a href="account.php"><b>Account</b></a>
       <a href="order_rq.php"><b>View Order</b></a>
       <a href="report_sell.php"><b>Report</b></a>
       <a href="logout.php"><b>Logout</b></a>
       
       
           </div>
       </div>

<br>
<br>

<br>
<br>

<br>
<br>


<div class="middle">



<?php
$status="Active"; 
 $results = mysqli_query($conn, "SELECT * FROM product WHERE product.status='$status'"); ?>



<table>
  <thead>
    <tr style="text-align: center">
    <th>Product Id</th>
      <th>Name</th>
      <th>Category Name</th>
      <th>Brand Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Image</th>
      <th>Description</th>
      <th>Status</th>
      
      
      <th colspan="2">Action</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr style="text-align: center">
      <td><?php echo $row['product_id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['c_name']; ?></td>
      <td><?php echo $row['brand_name']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['image']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['status']; ?></td>
      
      <td>
        <a href="product.php?edit=<?php echo $row['product_id']; ?>" class="edit_btn" >Edit</a>
      </td>
      <td>
        <a href="product_sql.php?del=<?php echo $row['product_id']; ?>" class="del_btn" onclick="return confirm('Are you sure want to delete?');">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>





<form method="post" action="product_sql.php" enctype="multipart/form-data" >
  <h2 style="text-align: center">Product</h2>
  <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="input-group">
      <label>Product Name</label>
      <input type="text" name="name" required value="<?php echo $name; ?>">
    </div>

    <div class="input-group">
      <label>Category Name</label>
      <input type="dropdown" name="c_name" list="c_name" class="">
        <datalist id="c_name">
          <?php include'connection.php'; ?>
          <?php 
            $sql=mysqli_query($conn, "SELECT * FROM category");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['c_name'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
    </div>

    <div class="input-group">
      <label>Brand Name</label>
      <input type="dropdown" name="brand_name" list="brand_name" class="">
        <datalist id="brand_name">
          <?php include'connection.php'; ?>
          <?php 
            $sql=mysqli_query($conn, "SELECT * FROM brand");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['brand_name'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
    </div>  

    <div class="input-group">
      <label>Price</label>
      <input type="text" name="price" required value="<?php echo $price; ?>">
    </div>

    <div class="input-group">
      <label>Quantity</label>
      <input type="text" name="quantity" required value="<?php echo $quantity; ?>">
    </div>

<div class="input-group">
      <label>Image</label>
      <input type="file" name="image" >
    </div>

    <div class="input-group">
       <label>Description</label>
      <input textarea 
        cols="40" rows="4" name="description" required value="<?php echo $description; ?>">
    </div>

    
    
    <div class="input-group">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: powderblue;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    </div>
  </form>



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
