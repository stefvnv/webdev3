<?php
//include connect.php as a Required file
require_once('../ex1/connect.php');

global $db;

//Get all cars
$query = 'SELECT * FROM car_details';
$cars = $db->query($query); //$cars array contains resultset
?>
<HTML>
<HEAD><TITLE>Car Details (with Edit)</TITLE></HEAD>
<BODY>
<h2>Car List</h2>
<table>
    <tr>
        <th>Identity</th>
        <th>Make</th>
        <th>Model</th>
    </tr>
    <!-- using foreach to loop through the $cars array, $car is an individual row -->
    <?php foreach ($cars as $car) : ?>
        <tr>
            <td><?php echo $car['id']; ?></td>
            <td><?php echo $car['make']; ?></td>
            <td><?php echo $car['model']; ?></td>
            <td>
                <form action="../ex4/edit_car_form.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $car['id']; ?>"/>
                    <input type="submit" value="Edit">
                </form>
            </td>

            <td>
                <form action="delete_car.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $car['id']; ?>"/>
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</BODY>
</HTML>