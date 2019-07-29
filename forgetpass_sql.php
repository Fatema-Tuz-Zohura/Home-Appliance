<?php  include('connection.php'); ?>


<!--accept one email as a string or an array of emails. -->
<?php 

function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}

 ?>

<?php 


if(isset($_POST['get_btn']))
  {
$validation_code=$_POST['v_code'];
$email=$_POST['mail'];

      if($email)
      {

        //$validation_code=($email);


        //setcookie('temp_access_code', $validation_code, time()+900);

        //$results = mysqli_query($conn, "SELECT * FROM category");

        $subject="This is your Verification Code: ";

        $message="Here is your password reset code {$validation_code}";

        $headers="From: fatematuzzohura95@gmail.com";

        if(!send_email($email,$subject,$message,$headers))
        {
          echo "Email could not be sent";
        }

        // set_message("<p class='bg-success' text-center>Please check your email or spam folder for a password reset code</p>");

        //include 'userlogin.php';

      }else{

        echo "This email does not exist";
      }

    }

if(isset($_POST['submit']))
  {
$validation_code=$_POST['v_code'];
$email=$_POST['mail'];
$mail_verification_code=$_POST['mail_v_code'];


   if ($validation_code==$mail_verification_code) {
   
  header("Location:resetpass.php? mail=$email");
 }
 else{
  echo "Verification Code not valid";
 }

}
 ?>