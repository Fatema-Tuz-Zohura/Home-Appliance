<?php 
	
	$home_applience = mysqli_connect('localhost', 'root', '', 'home_applience');

	// initialize variables
	$name = "";  
	$address = "";
	$email = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
        $email = $_POST['email'];



		mysqli_query($home_applience, "INSERT INTO user(name, address,email) VALUES ('$name', '$address' ,'$email' )"); 
		
		header('location: user.php');
	}


	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];



	mysqli_query($home_applience, "UPDATE user SET name='$name', address='$address', email='$email' WHERE user_id=$id");
    header('location: user.php');
}



if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($home_applience, "DELETE FROM user WHERE user_id=$id");
     header('location: user.php');
}


//display record
$results = mysqli_query($home_applience, "SELECT * FROM user");
?>