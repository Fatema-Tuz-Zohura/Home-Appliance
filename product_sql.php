<?php 
	
	$conn = mysqli_connect('localhost', 'root', '', 'home_applience');

	// initialize variables
	$name = "";
	$c_name = "";
	$brand_name = "";
	$price = "";
	$quantity = "";
	$image = "";
	$description = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		 move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);
		$name = $_POST['name'];
		$c_name = $_POST['c_name'];
		$brand_name = $_POST['brand_name'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$image1= $_FILES["image"]["name"];
		$status="Active";

		mysqli_query($conn, "INSERT INTO product (name, c_name, brand_name, price, quantity, image, description,  status) VALUES ('$name', '$c_name','$brand_name', '$price', '$quantity', '$image1', '$description',  '$status')");  
		header('location: product.php');
	}



	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$c_name = $_POST['c_name'];
		$brand_name = $_POST['brand_name'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$image1= $_FILES["image"]["name"];
		$description = $_POST['description'];
		
	

	mysqli_query($conn, "UPDATE product SET name='$name',  c_name='$c_name',  brand_name='$brand_name',   price='$price',  quantity='$quantity', image='$image1', description='$description' WHERE product_id=$id");
	 
	header('location: product.php');
}



if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM product WHERE product_id=$id");
	
     header('location: product.php');
}


//display record
$results = mysqli_query($conn, "SELECT * FROM product");
?>

