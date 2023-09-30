<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$productName = $_POST['productName'];
	$quantity = $_POST['quantity'];
	$rate = $_POST['rate'];
	$brandName = $_POST['brandName'];
	$categoryName = $_POST['categoryName'];
	$productStatus = $_POST['productStatus'];
	
	$image = $_FILES['productImage']['name'];
	$target = "../assets/myimages/".basename($image);
  
	$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
  
	// Allow only jpg, jpeg and png file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		//$valid['success'] = false;
		$msg = "Sorry, only JPG, JPEG, and PNG files are allowed.";
		echo $msg;
		exit;
	}
  
	if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target)) {
	  $msg = "Image uploaded successfully";
	  echo $msg;
	} else {
	  $msg = "Failed to upload image";
	  echo $msg;
	  exit;
	}
  
	$sql = "INSERT INTO product (product_name, product_image, brand_id, categories_id, quantity, rate, active, status, created) 
			VALUES ('$productName', '$image', '$brandName', '$categoryName', '$quantity', '$rate', '$productStatus', 1, now())";
  
	if($connect->query($sql) === TRUE) {
	  $valid['success'] = true;
	  $valid['messages'] = "Successfully Added";
	  header('location:fetchProduct.php');
	} else {
	  $valid['success'] = false;
	  $valid['messages'] = "Error while adding the members";
	  header('location:../add-product.php');
	}
  
	$connect->close();
  
	echo json_encode($valid);
   
  } // /if $_POST
  