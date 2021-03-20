<?php

namespace App\Controllers\Errors;

use Core\View;

class Error404Controller
{
    public function index()
    {
        header("HTTP/1.0 404 Not Found");

        $data = [
            'title' => 'Page not found'
        ];

        View::render('errors/404.html', $data);
    }
}
