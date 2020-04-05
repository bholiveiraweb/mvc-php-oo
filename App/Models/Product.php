<?php

namespace App\Models;

use App\Core\Database;

class Product
{
    private $db;
    private $table;

    public function __construct()
    {
        $this->db = Database::connect();
        $this->table = 'products';
    }

    public function getProducts()
    {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
