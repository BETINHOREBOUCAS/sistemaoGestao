<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/buy', 'BuyController@index');

$router->get('/inventory', 'InventoryController@index');
$router->get('/inventory/add', 'InventoryController@add');
$router->get('/inventory/edit/{id}', 'InventoryController@edit');

$router->get('/collaborator', 'CollaboratorController@index');

$router->get('/feedstock', 'FeedstockController@index');

$router->get('/report', 'ReportController@index');