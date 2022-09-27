<?php
  $nf = number_format(12345, 2);
  $date = date('m.d.Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formatting numbers and dates</title>
</head>
<body>
  <p>Formatted number: <?php echo $nf; ?></p>
  <p>Formatted date: <?php echo $date; ?></p>
</body>
</html>