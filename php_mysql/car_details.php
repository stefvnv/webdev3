<?php

//Add code to include the file “connect.php”
require_once('connect.php');

//Add code to Select all the records from the car_details table
global $db;

$query = 'SELECT * FROM car_details';
$cars = $db->query($query);  //$cars contains resultset
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

    //Use foreach to loop through the recordset and display each record as a row on table
    foreach ($cars as $car) : ?>
        <tr>
            <td><?php echo $car['id']; ?></td>
            <td><?php echo $car['make']; ?></td>
            <td><?php echo $car['model']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</BODY>
</HTML>
