<?php 
	
	$conn = mysqli_connect('localhost', 'root', '', 'home_applience');
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}
	// initialize variables
	if (!empty($_POST['user_id'])) {
		$user_id=$_POST['user_id'];
		$block_reason=$_POST['block_reason'];
		$mail=$_POST['email'];
		echo $block_reason;
		echo $mail;


	mysqli_query($conn, "UPDATE user SET status=0 WHERE user_id=$user_id");
	 
	$subject="Account Block";

        $message="Dear User, Assalamualaikum, 
        Your account has been blocked.
         {$block_reason}.";

        $headers="From: Home_applienceHome";
        
send_email($mail,$subject,$message,$headers);
		// END of mailing code

		
	header('location: account.php');
}
else if (isset($_GET['un_user_id']))
{
		$user_id=$_GET['un_user_id'];

	mysqli_query($conn, "UPDATE user SET status=1 WHERE user_id=$user_id");
	 
	header('location: account.php');
	}
	else
	{
	header('location: account.php');

	}
?>

