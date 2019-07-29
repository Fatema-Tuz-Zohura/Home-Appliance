<?php  include('connection.php'); 



	// initialize variables
	$brand_name = ""; 
	$category_id = ""; 
	
	$description = "";
	$id = 0; 
	$update = false;

	if (isset($_POST['save'])) {
		
        
		$brand_name = $_POST['brand_name'];
		$category_id = $_POST['category_id'];
		
       $description = $_POST['description'];
     



		mysqli_query($conn, "INSERT INTO brand(brand_name, category_id,description) VALUES ('$brand_name', '$category_id', '$description')"); 
		
		header('location: brand.php');
	}


	if (isset($_POST['update'])) {

	$id = $_POST['id'];
	$brand_name = $_POST['brand_name'];
	$category_id = $_POST['category_id'];

	$description = $_POST['description'];
	



	mysqli_query($conn, "UPDATE brand SET brand_name='$brand_name', category_id='$category_id', description='$description' WHERE brand_id=$id");
	
    header('location: brand.php');
   
}



if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM brand WHERE brand_id=$id");
	
     header('location: brand.php');
}


//display record
$results = mysqli_query($conn, "SELECT * FROM brand");
?>

