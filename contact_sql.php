<?php 
include 'connection.php';
function send_email($email,$subject,$msg,$header)
{
  return mail($email,$subject,$msg,$header);
}
?>

<?php
$name=$_POST['name'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sender_mail=$_POST['mail'];

// admin mail
$email="fatematuzzohura95@gmail.com";



//check unique Email  
  if(isset($_POST['submit']))
  {
    
       //sending mail
   $subject="{$subject}";

        $message="Dear Authority,Assalamualikum,  \n I am {$name}.\n {$message} .  \n Sincerely,  \n Name: {$name} ..  \n Email: {$sender_mail}";

        $headers="From: noreply@ors.com";

        if(!send_email($email,$subject,$message,$headers))
        {
          echo "Email could not be sent";
        }
        else
        {
          echo'
   <script>
   window.onload = function() {alert("Your Mail has been sent, Stay with us, THANK YOU");
      location.href = "contact.php";  
   }
   </script>
   ';
        }
    
        
  }

mysqli_close($conn);

?>