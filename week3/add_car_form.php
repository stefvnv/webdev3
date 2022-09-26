<?php


echo"<html>";
echo"<form method='post' action='add_car.php'>";
echo"<label for="make">Make: </label><br>";
echo"<input type="text" id="make" name="make"><br>";
echo"<label for="model">Model: </label><br>";
echo"<input type="text" id="model" name="model"><br>";

//it will create a string variable with the sql to insert the new record into the car_details database
////it will execue the query
/// it will include the car_details file



echo"</form>";
echo"</html>";


?>