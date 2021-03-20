<?php

namespace App\Models;

use Core\Database;

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function all()
    {
        $stmt = $this->db->query("SELECT * FROM products");
        return $stmt->fetchAll();
    }
}
