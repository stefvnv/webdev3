<?php

//$dsn='mysql:host=localhost;dbname=cars';
$dsn='mysql:host=127.0.0.1:3307;dbname=cars';
$username='root';
$password='';

$db=new PDO($dsn, $username, $password);

echo 'Connected!';

try{
    $db = new PDO($dsn, $username, $password);
    echo'<p>You are connected to the database!</p>';
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo'<p>An error occurred while trying to connect to the database! $error_message</p>';
}