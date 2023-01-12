<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/client', 'ClientController@index');
$router->get('/clientAdd', 'ClientController@clientAdd');
$router->get('/client/search/{id}', 'ClientController@searchClient');

$router->get('/buy', 'BuyController@index');

// Não encontrei o botão de redirecionamento
$router->get('/buy/historic/{id}', 'BuyController@buyHistoric');

$router->get('/inventory', 'InventoryController@index');

// Não tem o botão de adicionar produto
$router->get('/inventory/add', 'InventoryController@add');
$router->get('/inventory/edit/{id}', 'InventoryController@edit');

$router->get('/collaborator', 'CollaboratorController@index');
$router->get('/collaborator/add', 'CollaboratorController@addCollaborator');
$router->get('/collaborator/search/{id}', 'CollaboratorController@searchCollaborator');

$router->get('/feedstock', 'FeedstockController@index');

$router->get('/report', 'ReportController@index');

$router->get('/config', 'ConfigController@index');