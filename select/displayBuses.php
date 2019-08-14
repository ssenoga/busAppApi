<?php 
include '../settings/connect.config.php';

$sql = "SELECT * FROM company";
$query = $db->query($sql);
if($query){
    while($rows[] = $query->fetch_object()){
        $res = $rows;
        $json = json_encode($res);
    }
    echo $json;
}
