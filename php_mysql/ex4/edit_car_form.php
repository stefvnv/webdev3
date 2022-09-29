<?php

require_once('../ex1/connect.php');
$car_id = $_POST['id'];

global $db;

// Get all cars from DB
$query = "SELECT * FROM car_details WHERE id = $car_id";
$cars = $db->query($query);
//              $car = $cars->fetch();
?>

<html>
<head><title>Edit Car</title>
</head>
<body>

<h1>Edit Car</h1>
<form action="save_car.php" method="post">

    <?php foreach ($cars as $car) : ?>
        <tr>
            <td>ID:    <input name="id" type="text"  value="<?php echo $car['id']; ?>" /></td>
            <td>Make:  <input name="make" type="text"   value="<?php echo $car['make']; ?>"></td>
            <td>Model: <input name="model" type="text" value="<?php echo $car['model']; ?>"></td>
        </tr>
    <?php endforeach; ?>

    <input type="submit" value="Save Car">
</form>
</body>
</html>