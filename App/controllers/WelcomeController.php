<?php

namespace App\Controllers;

use Core\View;

class WelcomeController
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
        View::render('dashboard.html');
    }
}
