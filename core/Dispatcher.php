<?php

namespace Core;

class Dispatcher
{
    private $routes = [];
    private $namespace = null;
    private $error;

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    public function getNamespace()
    {
        return $this->namespace !== null ? $this->namespace : 'App\Controllers';
    }

    public function getError()
    {
        return $this->error;
    }

    public function dispatch($route, $callback)
    {
        $this->routes[] = $route;
        $this->error['404'] = true;

        $_uri = strtok($_SERVER['REQUEST_URI'], '?');
        $params = [];


        foreach ($this->routes as $key => $value) {
            $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);

            if (preg_match("#^({$pattern})*$#i", $_uri, $match) === 1) {
                $route = current($match);
                $params = array_slice($match, 2);

                if ($_uri === $route) {
                    if (is_callable($callback)) {
                        $callback->__invoke($params);
                        exit;
                    } else {
                        $strcall    = explode('@', $callback);
                        $controller = ucfirst(current($strcall)) ?? ucfirst(current($strcall));
                        $method     = implode(array_slice($strcall, 1, 1));

                        if (class_exists($this->getNamespace() . '\\' . $controller) && method_exists($this->getNamespace() . '\\' . $controller, $method)) {
                            call_user_func_array([$this->getNamespace() . '\\' . $controller, $method], $params);
                            $this->error['404'] = false;
                            exit;
                        }
                    }
                }
            }
        }
    }
}
