<?php

namespace Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    public static function render($view, $vars = [])
    {
        $loader = new FilesystemLoader(APP_VIEW_PATH);
        $twig = new Environment($loader, [
            'debug' => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $twig = new Environment($loader, [
            'cache' => APP_CACHE_PATH,
        ]);
        echo $twig->render($view, $vars);
    }
}
