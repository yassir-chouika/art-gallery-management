<?php
require_once __DIR__ . '/../../config/database.php';

class Warehouse
{
    public static function all()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM warehouses");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
