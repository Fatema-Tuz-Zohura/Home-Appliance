<?php  include('brand_sql.php'); ?>


<?php 
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM brand WHERE brand_id=$id");

    if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);

      $brand_name = $n['brand_name'];
       $category_id = $n['category_id'];
     

      $description = $n['description'];
      
     
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  
  
  <link rel="stylesheet" type="text/css" href="css/category.css">


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






<table>
  <thead>
    <tr>
        <th>Brand Id</th>
      <th>Brand Name</th>
       <th>Category Id</th>
      
      <th>Description</th>
      
      <th colspan="2">Action</th>
  </tr>
  </thead>



     
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>

    <td><?php echo $row['brand_id']; ?></td>
      <td><?php echo $row['brand_name']; ?></td>
      <td><?php echo $row['category_id']; ?></td>

      
      
      <td><?php echo $row['description']; ?></td>
      



      <td>
        <a href="brand.php?edit=<?php echo $row['brand_id']; ?>" class="edit_btn" >Edit</a>
      </td>
      <td>
        <a href="brand_sql.php?del=<?php echo $row['brand_id']; ?>" class="del_btn">Delete</a>
      </td>
    </tr>

  <?php } ?>

</table>





  <form method="post" action="brand_sql.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">






    <div class="input-group">
      <label>brand_name</label>
<input type="text" name="brand_name" required value="<?php echo $brand_name; ?>">
</div>


    <div class="input-group">
      <label>category_id</label>
      <input type="dropdown" name="category_id" list="category_id" class="">
        <datalist id="category_id">
          <?php include'connection.php'; ?>
          <?php 
            $sql=mysqli_query($conn, "SELECT * FROM category");
            while ($row=mysqli_fetch_array($sql)) {
              ?>
              <option value="<?php echo $row['category_id'] ?>"></option>
              <?php
            }
          ?>
          
        </datalist>
    </div>  





    <div class="input-group">
       <label>description</label>
      <input textarea 
        cols="40" rows="4" name="description" value="<?php echo $description; ?>" required>
    </div>



    <div class="input-group">
      <?php if ($update == true): ?>
  <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
  <button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
    </div>
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
