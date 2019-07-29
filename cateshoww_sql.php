<?php  include('connection.php'); 



	// initialize variables
	$c_name = ""; 
	$image = "";
	$description = "";
	$id = 0; 
	$update = false;
	if (isset($_POST['save'])) {

		 move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);
       
		$c_name = $_POST['c_name'];
		$img=$_FILES["image"]["name"];
       $description = $_POST['description'];
     



		mysqli_query($conn, "INSERT INTO category(c_name, image, description) VALUES ('$c_name','$img', '$description')"); 
		
		header('location: cateshoww.php');
	}


	if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$c_name = $_POST['c_name'];
	$image1= $_FILES["image"]["name"];
	$description = $_POST['description'];
	



	mysqli_query($conn, "UPDATE category SET c_name='$c_name', image='$image1', description='$description' WHERE category_id=$id");
	
    header('location: cateshoww.php');
   
}



if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM category WHERE category_id=$id");
	
     header('location: cateshoww.php');
}


//display record
$results = mysqli_query($conn, "SELECT * FROM category");
?>

