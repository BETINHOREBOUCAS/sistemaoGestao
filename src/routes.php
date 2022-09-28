<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/client', 'ClientController@index');
$router->get('/clientAdd', 'ClientController@clientAdd');
$router->get('/search/{id}', 'ClientController@searchClient');

$router->get('/buy', 'BuyController@index');
$router->get('/buy/historic/{id}', 'BuyController@buyHistoric');

$router->get('/inventory', 'InventoryController@index');
$router->get('/inventory/add', 'InventoryController@add');
$router->get('/inventory/edit/{id}', 'InventoryController@edit');

$router->get('/collaborator', 'CollaboratorController@index');
$router->post('/collaborator', 'CollaboratorController@post');

$router->get('/feedstock', 'FeedstockController@index');

$router->get('/report', 'ReportController@index');

$router->get('/config', 'ConfigController@index');