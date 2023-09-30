<?php 	

require_once 'core.php';
$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
    extract($_POST);
    $name = $_POST['name']; 
    $address = $_POST['address']; 
    $gender = $_POST['gender']; 

    $productImage 	= $_POST['productImage'];

    //$connection_no = rand(000,999);

    $image = $_FILES['productImage']['name'];
    $fileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $allowedTypes = array('jpg', 'jpeg', 'png');

    if(in_array($fileType, $allowedTypes)){
        $target = "../assets/myimages/".basename($image);
        if (move_uploaded_file($_FILES['productImage']['tmp_name'], $target)) {
            // @unlink("uploadImage/Profile/".$_POST['old_image']);
            //echo $_FILES['image']['tmp_name'];
            //echo $target;exit;
            $msg = "Image uploaded successfully";
            echo $msg;
        }else{
            $msg = "Failed to upload image";
            echo $msg;
        }

        $sql = "INSERT INTO `tbl_client`(`name`, `mob_no`, `address`, `gender`,`image`, `created_date_time`)VALUES ('$name', '$mob_no', '$address','$gender','$image', now())";

        if($connect->query($sql) === TRUE) {
            $valid['success'] = true;
            $valid['messages'] = "Successfully Added";
            header('location:../client.php');	
        } 
        else {
            $valid['success'] = false;
            $valid['messages'] = "Error while adding the members";
            header('location:../client.php');
        }

        // /else	
        // if
        // if in_array 		

        $connect->close();

        echo json_encode($valid);
    }
    else{
        $msg = "Only JPG, JPEG, and PNG files are allowed.";
        echo $msg;
    }
} // /if $_POST
