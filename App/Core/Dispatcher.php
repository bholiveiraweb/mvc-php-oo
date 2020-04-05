<?php

namespace App\Core;

class Dispatcher
{
    private static $routes = [];
    private static $namespace = null;
    private static $error;

    public static function setNamespace($namespace)
    {
        self::$namespace = $namespace;
    }

    public static function getNamespace()
    {
        return self::$namespace;
    }

    public function getError()
    {
        return self::$error;
    }

    public static function dispatch($route, $callback)
    {
        self::$routes[] = $route;
        self::$error['404'] = true;

        $_uri = strtok($_SERVER['REQUEST_URI'], '?');
        $params = [];


        foreach (self::$routes as $key => $value) {
            $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);

            if (preg_match("#^({$pattern})*$#i", $_uri, $match) === 1) {
                $route = current($match);
                $params = array_slice($match, 2);

                if ($_uri === $route) {
                    if (is_callable($callback)) {
                        $callback->__invoke($params);
                        exit;
                    } else {
                        $strcall    = explode('::', $callback);
                        $controller = ucfirst(current($strcall)) ?? ucfirst(current($strcall));
                        $method     = implode(array_slice($strcall, 1, 1));

                        if (class_exists(self::getNamespace() . $controller) && method_exists(self::getNamespace() . $controller, $method)) {
                            call_user_func_array([self::getNamespace() . $controller, $method], $params);
                            self::$error['404'] = false;
                            exit;
                        }
                    }
                }
            }
        }
    }
}
