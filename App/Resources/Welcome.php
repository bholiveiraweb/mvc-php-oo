<?php

namespace App\Resources;

use App\Core\View;
use App\Models\Product;

class Welcome
{
    public function index()
    {
        $data = [
            'title' => 'Bem vindo(a)! Faça login'
        ];

        View::render('login.html', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Listagem de produtos',
            'products' => Product::getProducts()
        ];

        View::render('index.html', $data);
    }
}
