<?php include 'connection.php';?>
<?php  
//variables to hold our submitted data with post
session_start();
	$mail = $_POST['mail'];
	//login password
	$password = $_POST['psw'];
	//loging condition      
					if(isset($_POST['button1']))
					{
						
						//our sql statement that we will execute
						$sql = mysqli_query($conn, "SELECT email, password FROM admin WHERE email = '$mail'");

						$row = mysqli_fetch_array($sql);

						if($row["email"]==$mail && $row["password"]==$password)
						{
							$_SESSION['admin_loged']=true;
							header("Location:http://localhost/home_appliencee/home.php"); 
						}
						else
						{
						 echo "<h2 style = 'font-family:cursive;font-size:30px;background-color:whitesmoke;height:109px'> Your Email Or Password Is Not Correct.Try Again  .....</h2>";
						}
						mysqli_close($conn); //close the connection
					}
					?>
