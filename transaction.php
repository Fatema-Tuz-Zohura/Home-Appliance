<?php include 'connection.php';?>
<?php 
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}

 ?>

<div>

<form action="#" method="post">



<label   for="uname"></label>
    <input  style="background-color: white;font-size: 19px;width: 336px;border-radius: 40px;height: 38px"  type="text" name="tran" placeholder="Enter your name" name="uname"  maxlength="30" required /><br></br>
      
      <p>Enter Your Transaction Code</p>

      <div class="btnn">
             <button name="submit" type="submit" > <a href="#"></a>Send</button>
            
</form>
</div>
            <?php

if (isset($_POST['submit'])) {
		
        
		$tran = $_POST['tran'];


		$sql= "INSERT INTO transaction(t_id, t_code) VALUES ('$tran')"; 
		if(mysqli_query($conn, $sql)) 
							{ 
								echo "<script>alert('Your transaction code was sent. Please check your Email after sometime!!!');
								 window.location='order.php'</script>";
							}


		$subject="Order Confirmation";

        $message="Dear   Your Order id ({$t_code}) has been Approved.";

        $headers="From: noreply@ors.com";
        

        send_email($email,$subject,$message,$headers);

		// END of mailing code

            ?>

            <?php


        }
            ?>