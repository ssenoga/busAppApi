<?php
require '../settings/connect.config.php';


$name = $_POST['selectedBusCompany'];

// $sql = "SELECT * FROM bus join company on bus.company_id = company.company_id WHERE company_name = '$name'";
// 	$q = $db->query($sql);
// 	if($q){
// 		while($rows[] = $q->fetch_object()){
// 			$res = $rows;
// 			$json = json_encode($res);
// 		}
// 		echo $json;
// 	}
// 	else {
// 		echo "failed";
// 	}

if($name){
	$sql = "SELECT * FROM bus join company on bus.company_id = company.company_id WHERE company_name = '$name'";
	$q = $db->query($sql);
	if($q){
		while($rows[] = $q->fetch_object()){
			$res = $rows;
			$json = json_encode($res);
		}
		echo $json;
	}
	else {
		echo "failed";
	}
	
}else {
	echo "failed";
}


// create table selected(SELECT * FROM bus join company on bus.company_id = company.company_id WHERE company_name = "Jaguar Coaches");


