<?php
  // get values of form fields from $_POST global array
  $prod_desc = $_POST['desc'];
  $list_price = $_POST['price'];
  $discount_percent = $_POST['percent'];


  //A. CHECKING FOR VALID INPUT


  //empty fieds check
  if (empty($prod_desc)){
    $error_message = 'Product Description is a required field.';
    include('DiscountCalculator_2.php');
    exit();
  }

  if (empty($list_price) && !is_numeric($list_price)){
    $error_message = 'List Price is a required field.';
    include('DiscountCalculator_2.php');
    exit();
  }

  if (empty($discount_percent)){
    $error_message = 'Discount Percent is a required field.';
    include('DiscountCalculator_2.php');
    exit();
  }


  //numeric check
  if (!is_numeric($list_price) || $list_price <= 0 ){
    $error_message = 'List Price must be a numeric value that is greater than 0.';
    include('DiscountCalculator_2.php');
    exit();
  }
  
  if (!is_numeric($discount_percent) || $discount_percent < -1 ){
    $error_message = 'Discount Percent must be a numeric value that is greater than or equal to 0.';
    include('DiscountCalculator_2.php');
    exit();
  }



  //calculations#
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