<?php 
// DB credentials.
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "merezgasmis";

$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
?>





