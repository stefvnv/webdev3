<?php
  // get values of form fields from $_GET global array
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];

  // write variables out to page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Your first name is <?php echo $first_name; ?></p>
  <p>Your last name is <?php echo $last_name; ?></p>
  
  <p><a href="HTMLForm.html">Try again!</a></p>
</body>
</html>