
<?php include 'connection.php';?>
<?php

session_start();

$eid = $_POST['mail'];

$pass = $_POST['psw'];

if(isset($_POST['button1']))
{


$query = "SELECT * FROM user where email = '$eid' and password = '$pass'";




$result = mysqli_query($conn,$query) or die("Error in query");



$row = mysqli_num_rows($result);



$result2 = mysqli_query($conn,"SELECT name from user where email = '$eid'");

$r = mysqli_fetch_row($result2);

if($row == 1)
{

$_SESSION['email'] = $eid;

$_SESSION['name'] = $r[0];


header("location:index2.php");

}


else
{
echo "<h2 style = 'font-family:cursive;font-size:30px;background-color:whitesmoke;height:109px'> Your Email Or Password Is Not Correct.Try Again  .....</h2>";
}

}

mysqli_close($conn);
?>