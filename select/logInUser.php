<?php 

include '../settings/connect.config.php';
if(isset($_POST['name']) && isset($_POST['password'])){
	$email =  $_POST['name'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM customers WHERE email_address ='$email' AND customer_password = '$pass'";
	$q = $db->query($sql);
	if($q-> num_rows > 0){
	    echo "success";
	}else {
	    echo "failed";
	}

}else {
	echo "failed";
}

