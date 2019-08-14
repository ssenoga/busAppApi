<?php
require '../settings/connect.config.php';

// check if the first name and last name are set
if(isset($_POST['gender'])){
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$location = $_POST['location'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO customers(first_name,last_name,email_address,customer_location,customer_password,customer_gender) VALUES('$fname','$lname','$email','$location','$password','$gender') ";

	$query = $db->query($sql);
	if($query){
		echo "success";
	}else {
		echo "failed";
	}
}else {
	echo "failed";
}
