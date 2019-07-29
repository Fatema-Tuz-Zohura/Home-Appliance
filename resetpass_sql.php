<?php  include('connection.php'); ?>

<?php 
$mail=$_POST['mail'];
$pass=md5($_POST['psw']);

if(isset($_POST['button1']))
  {
    $sql="UPDATE user SET password='$pass' WHERE email='$mail'";
    if (mysqli_query($conn, $sql)) {

    echo'
   <script>
   window.onload = function() {
      alert("Your Password have been updated");
      location.href = "userlogin.php";  
   }
   </script>
   ';
    }
  }

  ?>