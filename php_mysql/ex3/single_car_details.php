<?php

//Add code to include the file “connect.php”
require_once('../ex1/connect.php');

//Add code to Select all the records from the car_details table
global $db;

//$car_id = 1;
$query = 'SELECT * FROM car_details WHERE id =  1';
$cars = $db->query($query);  //$cars contains resultset
$selected_car = $cars->fetch();
?>

<HTML lang="">
<HEAD><TITLE>Car Details</TITLE></HEAD>
<BODY>
<h2>Car List</h2>
<table>
    <tr>
        <th>Identity</th>
        <th>Make</th>
        <th>Model</th>
    </tr>
    <?php
    $selected_carID = $selected_car['id'];
    $selected_carMake = $selected_car['make'];
    $selected_carModel = $selected_car['model']; ?>
</table>
</BODY>
</HTML>
