<?php

global $db, $make, $model, $insert_count, $query;

//“add_car.php” should require the connect.php file
require_once('../ex1/connect.php');

//It will read on the Make and Model sent by POST
$make = $_POST['make'];
$model = $_POST['model'];

//error checking
if (empty($make)) {
    $error_message = 'Make is a required field.';
} elseif (empty($model)) {
    $error_message = 'Model is a required field.';
}else{
    //set error message to empty string
    $error_message = '';

    $make = ‘Toyota’;
    $model = ‘Starlet’;
    //$query = 'INSERT INTO car_details (make, model)	 VALUES ('$make', '$model')';
	$insert_count = $db->exec($query);


}

//if error message exists, go to index page
if ($error_message != '') {

    //Finally, it will include the “car_details” file to display the results
    include('car_details.php');

}
