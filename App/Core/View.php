<?php

namespace App\Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    public static function render($view, $vars = [])
    {
        $loader = new FilesystemLoader(VIEW_PATH);
        $twig = new Environment($loader, [
            'debug' => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        /* $twig = new Environment($loader, [
            'cache' => CACHE_PATH,
        ]); */
        echo $twig->render($view, $vars);
    }
}
