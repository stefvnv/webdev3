<?php
$prod_desc_init = "";
$list_price_init = "";
$discount_percent_init = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator (HTML)</title>
</head>
<body>
    <h1 style="color: navy;">Product Discount Calculator</h1>

    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
        <?php }
        
        global $prod_desc, $list_price, $discount_percent;

        $prod_desc_init = $prod_desc;
        $list_price_init = $list_price;
        $discount_percent_init = $discount_percent;
        ?>

    <form action="display_discount_2.php" method="post">
        <div id="data">
            <label>Product Description: </label>
            <input type="text" name="desc" value="<?php echo $prod_desc_init ?>"><br>
    
            <label>List Price: </label>
            <input type="text" name="price" value="<?php echo $list_price_init ?>"><br>
    
            <label>Discount Percent: </label>
            <input type="text" name="percent" value="<?php echo $discount_percent_init ?>"><br>
        </div>

        <div id="buttons">
            <input type="submit" value="Calculate Discount"><br>
        </div>
    </form> 
</body>
</html>