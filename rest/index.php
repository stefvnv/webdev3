<?php
require 'Slim/Slim.php';
require 'wine_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->get('/wines', 'getWines');
$app->get('/wines/:id',  'getWine');
$app->get('/wines/search/:query', 'findByName');
$app->post('/wines', 'addWine');
$app->delete('/wines/:id',	'deleteWine');
$app->put('/wines/:id', 'updateWine');
$app->run();
?>



