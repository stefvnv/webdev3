<?php

require_once('connect.php');

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
}

//if error message exists, go to index page
if ($error_message != '') {
    include('add_product_form.php');

}
