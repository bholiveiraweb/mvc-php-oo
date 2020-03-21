<?php

namespace App\Models;

use App\Core\Database;

class Product
{
    public static function getProducts()
    {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM products");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
