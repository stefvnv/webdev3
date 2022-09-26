<?php

//$dsn='mysql:host=localhost;dbname=cars';
$dsn='mysql:host=127.0.0.1:3307;dbname=cars';
$username='root';
$password='';

$db=new PDO($dsn, $username, $password);

echo 'Connected!';

?>