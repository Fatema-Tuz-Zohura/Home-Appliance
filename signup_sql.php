<?php include 'connection.php';?>
<?php  
//variables to hold our submitted data with post
	$username = $_POST['uname'];
	$contact = $_POST['contact'];
	$email = $_POST['mail'];
	$password = $_POST['psw'];
	$passrpt = $_POST['psw-repeat'];
	$address = $_POST['address'];
	$found=false;
	//loging condition      
					if(isset($_POST['button1']))
					{
						
						//our sql statement that we will execute
						//our sql statement that we will execute
						$sql = mysqli_query($conn, "SELECT * FROM user WHERE email= '$email'");

						while ($row = mysqli_fetch_array($sql)) {
						if($row["email"]==$email)
						{
								$found=true;
						}
						}


						if ($found==true) {
								echo '<script>alert("email already exist!"); window.location="signup.php"</script>';
						}
						else
						{

						$sql= "INSERT INTO user(name,contact, email, password,address,create_date) 
								VALUES('$username', '$contact', '$email', '$password','$address',NOW())";

							if(mysqli_query($conn, $sql)) 
							{ 
								echo "<script>alert('You are Successfully Registered!!!'); window.location='userlogin.php'</script>";
							}

							else {
								echo "Sorry!! Data not sent to the Database";
							}
							}
					}

					?>