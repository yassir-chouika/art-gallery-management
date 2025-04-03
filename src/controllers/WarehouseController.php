<?php
require_once __DIR__ . '/../models/Warehouse.php';

class WarehouseController {
    public function index() {
        $warehouses = Warehouse::all();
        include __DIR__ . '/../views/warehouses/index.php';
    }
}
?>
