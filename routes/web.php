<?php
require_once __DIR__ . '/../src/core/Router.php';
require_once __DIR__ . '/../src/controllers/PaintingController.php';
require_once __DIR__ . '/../src/controllers/WarehouseController.php';

$router = new Router();
$router->addRoute('/paintings', 'PaintingController', 'index');
$router->addRoute('/warehouses', 'WarehouseController', 'index');

$router->dispatch($_SERVER['REQUEST_URI']);
?>
