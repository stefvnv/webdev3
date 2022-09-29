<?php
require_once('../ex1/connect.php');

global $db;

// Get the product data
$id = $_POST['id'];
$make = $_POST['make'];
$model = $_POST['model'];

//error checking
if (empty($make)) {
    $error_message = 'Make is a required field.';
} else if (empty($model)) {
    $error_message = 'Model is a required field.';
} else {
    // set error message to empty string if no invalid entries
    $error_message = '';
}

// if an error message exists, go to the edit form
if ($error_message != '') {
    include('edit_car_form.php');
    exit();
}

$query = "UPDATE car_details set make = '$make', model = '$model' WHERE id = '$id'";
$insert_count = $db->exec($query);

// Display the Car List page by including car_details.php
include('car_details.php');
exit();