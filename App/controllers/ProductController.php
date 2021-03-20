<?php

namespace App\Controllers;

use Core\View;
use App\Models\Product;

class ProductController
{
    public function index()
    {
        $data = [
            'title' => 'Listagem de produtos',
            'products' => (new Product)->all()
        ];

        View::render('index.html', $data);
    }
}
