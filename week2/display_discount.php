<?php
  // get values of form fields from $_POST global array
  $prod_desc = $_POST['desc'];
  $list_price = $_POST['price'];
  $discount_percent = $_POST['percent'];

  $amount = $list_price * $discount_percent * 0.01;
  $price = $list_price - $amount;

  $list_price_formatted = "&euro;" .number_format($list_price, 2);
  $amount_formatted = "&euro;" .number_format($amount, 2);
  $price_formatted ="&euro;" .number_format($price, 2);



  // write variables out to page
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Discount Calculator (PHP)</title>
</head>
<body>
    
  <p>Product Description: <?php echo $prod_desc; ?></p>
  <p>List Price: <?php echo $list_price_formatted; ?></p>
  <p>Standard Discount: <?php echo $discount_percent; ?>%</p>
  <p>Discount Amount: <?php echo $amount_formatted; ?></p>
  <p>Discount Price: <?php echo $price_formatted; ?></p>
</body>
</html>