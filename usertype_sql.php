<?php 

$user = $_POST['user'];  
if ($user == "ad") {          
    header("Location:http://localhost/home_appliencee/adminlogin.php");      
}
else {
     header("Location:http://localhost/home_appliencee/userlogin.php");   
}          
?>
Chat Conversation End
Type a message...