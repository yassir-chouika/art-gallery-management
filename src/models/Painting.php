<?php
require_once __DIR__ . '/../../config/database.php';

class Painting
{
    public static function all()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM paintings");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
