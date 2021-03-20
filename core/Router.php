<?php

namespace Core;

use Core\Dispatcher;

class Router extends Dispatcher
{
   public function __construct()
   {
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
   }

   public function namespace($namespace)
   {
      $this->setNamespace($namespace);
   }

   public function get($route, $callback)
   {

      if ($_SERVER['REQUEST_METHOD'] == 'GET')
         return $this->dispatch($route, $callback);
   }

   public function post($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST')
         return $this->dispatch($route, $callback);
   }

   public function put($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'PUT')
         return $this->dispatch($route, $callback);
   }

   public function delete($route, $callback)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
         return $this->dispatch($route, $callback);
   }

   public function redirect($path)
   {
      header("Location: " . APP_BASE_URL . $path);
   }

   public function error()
   {
      return $this->getError();
   }
}
