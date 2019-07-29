<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">


<body>


<div  class="header">
  <div class="header_logo_div">
        <img src="image/images (1).png" style="height: 60px; width: 150px">
    </div>
    <div class="search-container">
        <form style="padding-top: 1%; margin-left: 15%;" action="/action_page.php">
            <input type="text" placeholder="Search here..." name="search">
          <button type="submit">Submit</button>
        </form>
    </div>

    <div class="header-right">
      
       
    <a href="admincategory.php"><b>Shop Now</b></a>
       <a href="cart .php"><b>Cart</b></a>
      <a href="usertype.php"><b>Login</b></a>


           

      
     
    
    
      
      </div>
</div>

<?php 
  
      if(!isset($_GET['email']) && !isset($_GET['code'])){

        header ("index.php");

      }elseif (empty($_GET['email']) || empty($_GET['code'])) {

        header ("index.php");

      }else{

        if(isset($_POST['code'])){

          $email=$_GET['email'];

          $validation_code=$_POST['code'];

          $sql="SELECT user_id FROM users WHERE password='".$validation_code."'
           AND email='".$email."' ";
           $result=mysqli_query($sql);

           if(row_count($result)==1)
           {
            setcookie('temp_access_code', $validation_code, time()+900);

            header ("resetpass.php?email=$email&code=$validation_code");

           }else{

            <!-- echo validation_errors("Sorry wrong validation code"); -->

           }
        }
      }
    

  }else{

    <!-- set_message("<p class='bg-danger text-center'>Sorry your validation cookie was expired</p>"); -->

    redirect("recover.php");

  }

 ?>

	<form action="" method="post">
<table>
  <tr>
   
<br>
<br>
<br>
<br>
<br>
<br>

  
  


  <div class="middle1" style="background-color: whitesmoke;height: 500px">

        <div class="container" style="background-color: #DCDCDC;height: 300px;width: 600px;margin-left: 332px">
<div>

    <label   for="mail"></label>
    <input style="background-color: white;
    margin-top: 80px;
    margin-left: 77px;
    height: 38px;
    width: 398px;
    font-size: 17px" type="text"  name="code"   /><br</br><br>
</div>



<br>
<br>





    <div style="background-color: lightgray;height: 64px;
    width: 184px;margin-left: 123px;font-family: cursive;border: 1px solid;cursor: pointer; color: black;
    margin-top: 24px;background: darkolivegreen">

  
<a href="#"><button  style="background-color: lightgray;
    width: 135px;
    height: 44px;
    font-family: cursive;
    margin-top: 7px;
    font-size: 24px;
    border-radius: 40px;margin-left: 21px" type="button" class="submitbtn"><b>submit</b></button></a>



        </div>

  </div>




        
   
    



<br>
<br>
<br>
<br>

  
</tr>
  </table>
</div>



                  <div class="footer">
                    <div class="fleft">

        <h4>Navigation</h4>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Customer</a></li>
            <li><a href="#">Report</a></li>
          </ul>
                     </div>


             <div class="fmiddle">
        <h4>Support</h4>
          <ul class="links">
            
            <li><a href="#">Guide</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
                     </div>









 <div class="fright">
        
          <h4>Policies</h4>
          <ul class="links">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Happy Return</a></li>
            
          </ul>
        </div>
      </div>
    
  

 <div class="bellow2"  style="background-color: #b35900">



  
<p>
            <small class="block"> <i>All Rights Reserved...Stay Connected</i></small> 
            
          </p>

<img class="twiter"  src="image/white-twitter-icon-png-11.png">
          <img class="google"  src="image/google.ico">
          <img class="youtube"  src="image/youtube1.png">
          <img class="instagram"  src="image/instagram-1581266__340.jpg">
          <img class="blog"  src="image/blog.png">
          <img class="facebook" src="image/facebook.jpg"> 
          <img class="linkedin" src="image/linked.png">

   

 





</body>
</html>