<?php  include('connection.php'); 

function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}


		$pay_code = $_POST['pay_code'];

	if (isset($_POST['confrm_btn'])) {
		
        $email="fatematuzzohura95@gmail.com";
		$subject="Payment Confirmation";

        $message="Dear Authority,Assalamualaikum, my transaction code is {$pay_code} ";

        $headers="From: fatematuzzohura95@gmail.com";

        if(!send_email($email,$subject,$message,$headers))
        {
          echo "Email could not be sent";
        }
		
		echo "<script>alert('code is send successfuly.Thank you'); window.location='order.php'</script>";

	}


?>

