<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$categoriesName = $_POST['categoriesName'];
  $categoriesStatus = $_POST['categoriesStatus']; 

	$sql = "INSERT INTO categories (categories_name, categories_active, categories_status, created) 
	VALUES ('$categoriesName', '$categoriesStatus', 1, now())";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:fetchCategories.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST