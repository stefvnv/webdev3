<?php
require_once('../ex1/connect.php');

global $db;

$car_id = $_POST['id'];
$query = "DELETE FROM car_details 
				WHERE id = $car_id";
$delete_count = $db->exec($query);

include('car_details.php');
exit();